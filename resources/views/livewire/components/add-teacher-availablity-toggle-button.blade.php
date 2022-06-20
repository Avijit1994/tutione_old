<div>
    <div class="panel-timecard row">
        <div class="col-md-3 timecard-day">{{ $day }}</div>
        <div class="col-md-1">
            <div class="media-body text-start switch-md">
                <label class="switch">
                    <input type="checkbox" wire:model="isActive" class="timecard-switch" />
                    <span class="switch-state"></span>
                </label>
            </div>
        </div>
        @if ($isActive == true)
            <div class="col-md-4">
                <input type="time" class="form-control" wire:model="start_time"/>
            </div>
            <div class="col-md-4">
                <input type="time" class="form-control" wire:model="end_time"/>
            </div>
        @endif
    </div>
</div>
