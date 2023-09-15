<div>
    @if ($message = Session::get('success_message'))
        <div class="p-4 mb-3 bg-success-400 rounded">
            <p class="text-success-800">{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error_message'))
        <div class="p-4 mb-3 bg-danger-400 rounded">
            <p class="text-danger-800">{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('warning_message'))
        <div class="p-4 mb-3 bg-warning-400 rounded">
            <p class="text-warning-800">{{ $message }}</p>
        </div>
    @endif
</div>
