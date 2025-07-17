<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasUuids;

    protected $fillable = [
        'name',
        'email',
        'password',
        'pass',
        'role',
        'status',
        'balance',
        'profit',
        'phone',
        'telegram',
        'avatar',
        'country',
        'city',
        'address',
        'captcha',
        'invested',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function status()
    {
        if ($this->status > 0) {
            return '<span class="badge bg-success">Verified</span>';
        }
        return '<span class="badge bg-warning">Unverified</span>';
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function stockOrder()
    {
        return $this->hasMany(StockOrder::class);
    }

    public function referral()
    {
        return $this->hasOne(Referral::class);
    }

    public function referredBy()
    {
        return $this->hasOne(Referral::class, 'user_id')->with('referrer');
    }

    public function referrals()
    {
        return $this->hasManyThrough(
            User::class,
            Referral::class,
            'referrer_id',  // This user's ID as the referrer
            'id',           // Referred user's ID
            'id',           // This user's ID
            'user_id'       // Referred user's ID in referrals table
        );
    }

    /**
     * Get user initials from name
     */
    public function getInitialsAttribute(): string
    {
        $name = trim($this->name);
        if (empty($name)) {
            return 'U';
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
     * Check if user has avatar image
     */
    public function hasAvatarImage(): bool
    {
        return $this->avatar && Storage::disk('public')->exists($this->avatar);
    }

    /**
     * Check if user is online (active within last 5 minutes)
     */
    public function isOnline(): bool
    {
        // For now, we'll consider all authenticated users as online
        // In a real application, you might want to track last activity in a separate table
        // or use Laravel's built-in session tracking
        return true;
        
        // Alternative implementation with last_activity tracking:
        // return $this->last_activity && $this->last_activity->diffInMinutes(now()) < 5;
    }

    public function trades()
    {
        return $this->hasMany(Trade::class);
    }

}
