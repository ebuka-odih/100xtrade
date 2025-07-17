<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CopyTrader extends Model
{
    use HasUuids;
    protected $guarded = [];

    public function copied_trades()
    {
        return $this->hasMany(CopiedTrade::class, 'copy_trader_id');
    }

    /**
     * Get copy trader initials from name
     */
    public function getInitialsAttribute(): string
    {
        $name = trim($this->name);
        if (empty($name)) {
            return 'CT';
        }

        $words = explode(' ', $name);
        $initials = '';

        if (count($words) >= 2) {
            // Get first letter of first name and first letter of last name
            $initials = strtoupper(substr($words[0], 0, 1) . substr($words[count($words) - 1], 0, 1));
        } else {
            // If only one word, get first two letters
            $initials = strtoupper(substr($name, 0, 2));
        }

        return $initials;
    }

    /**
     * Get avatar display (either image or initials)
     */
    public function getAvatarDisplayAttribute(): string
    {
        if ($this->avatar && Storage::disk('public')->exists($this->avatar)) {
            return asset('storage/' . $this->avatar);
        }
        
        return ''; // Return empty string to indicate no image, use initials instead
    }

    /**
     * Check if copy trader has avatar image
     */
    public function hasAvatarImage(): bool
    {
        return $this->avatar && Storage::disk('public')->exists($this->avatar);
    }
}
