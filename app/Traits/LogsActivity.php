<?php

namespace App\Traits;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

trait LogsActivity
{
    /**
     * Boot the trait.
     */
    protected static function bootLogsActivity()
    {
        // Listen for created event
        static::created(function ($model) {
            $model->logActivity('create', null, $model->toArray());
        });

        // Listen for updated event
        static::updated(function ($model) {
            // Only log if there are changes
            if (count($model->getDirty()) > 0) {
                $model->logActivity('update', $model->getOriginal(), $model->getChanges());
            }
        });

        // Listen for deleted event
        static::deleted(function ($model) {
            $model->logActivity('delete', $model->toArray(), null);
        });

        // Listen for restored event (if using SoftDeletes)
        if (method_exists(static::class, 'restored')) {
            static::restored(function ($model) {
                $model->logActivity('restore', null, $model->toArray());
            });
        }

        // Listen for forceDeleted event (if using SoftDeletes)
        if (method_exists(static::class, 'forceDeleted')) {
            static::forceDeleted(function ($model) {
                $model->logActivity('force_delete', $model->toArray(), null);
            });
        }
    }

    /**
     * Log the activity.
     */
    protected function logActivity($action, $oldData = null, $newData = null)
    {
        // Only log if user is authenticated (usually admin actions)
        // You might want to remove this check if you want to log system actions or public actions
        if (!Auth::check()) {
            return;
        }

        ActivityLog::create([
            'table_name' => $this->getTable(),
            'action' => $action,
            'old_data' => $oldData ? $this->filterData($oldData) : null,
            'new_data' => $newData ? $this->filterData($newData) : null,
            'user_id' => Auth::id(),
        ]);
    }

    /**
     * Filter data to exclude sensitive or unnecessary fields.
     */
    protected function filterData($data)
    {
        $hidden = $this->getHidden();
        $hidden[] = 'password';
        $hidden[] = 'remember_token';

        return array_diff_key($data, array_flip($hidden));
    }
}
