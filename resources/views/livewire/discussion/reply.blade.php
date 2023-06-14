<!-- Modal body -->
<div class="p-6 space-y-6">
    <h3 class="text-xl font-medium text-slate-900 dark:text-white">{{ $reply?->id ? 'Update reply content' : 'Post a reply' }}</h3>
    <form>
        {{ $this->form }}
        <!-- Modal footer -->
        <div class="flex items-center space-x-2 rounded-b mt-5">
            <button wire:click="submit" type="button" wire:loading.attr="disabled"
                    class="text-white bg-green-500 disabled:bg-green-300 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                {{ $reply?->id ? 'Edit reply' : 'Add reply' }}
            </button>
            @if($reply?->id)
                <button type="button" wire:click="cancel()" wire:loading.attr="disabled" class="text-white bg-gray-500 disabled:bg-gray-300 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Cancel
                </button>
            @endif
        </div>
    </form>
</div>

@push('scripts')
    <script>
        window.addEventListener('replyAdded', () => {
            const hideReplyBtn = document.getElementById('hide-reply-modal');
            hideReplyBtn.click();
        });
    </script>
@endpush