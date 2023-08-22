<?php

namespace App\Http\Livewire\TeamMember;

use Livewire\Component;

class Index extends Component
{
    public function deleteMember(TeamMember $member)
    {
        $member->delete();
    }
    public function render()
    {
        $team = TeamMember::get();
        return view('livewire.team-member.index', compact('team'));
    }
}
