<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WorkExperienceAchievement;
use Illuminate\Auth\Access\Response;

class WorkExperienceAchievementPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, WorkExperienceAchievement $workExperienceAchievement): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, WorkExperienceAchievement $workExperienceAchievement): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, WorkExperienceAchievement $workExperienceAchievement): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, WorkExperienceAchievement $workExperienceAchievement): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, WorkExperienceAchievement $workExperienceAchievement): bool
    {
        //
    }
}
