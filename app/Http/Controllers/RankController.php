<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RankController extends Controller
{
    public function like($userId)
    {
        return $this->collectXP($userId, 2);
    }

    public function post($userId)
    {
        return $this->collectXP($userId, 20);
    }

    public function subscribe($userId)
    {
        return $this->collectXP($userId, 10);
    }

    private function collectXP($userId, $xpAmount)
    {
        $user = User::findOrFail($userId);
        $user->increment('xp', $xpAmount);

        $this->updateRank($user);

        return response()->json(['message' => 'XP erfolgreich gesammelt']);
    }

    private function updateRank(User $user)
    {
        $newRank = ceil($user->xp / 100);

        if ($newRank !== $user->rank) {
            $user->update(['rank' => $newRank]);
        }
    }

    public function showRank()
    {
        $user = auth()->user();

        return view('rank.show', ['user' => $user]);
    }
}