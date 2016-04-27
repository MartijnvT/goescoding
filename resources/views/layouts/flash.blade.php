<!-- Showing flashmessage when creating, updating and deleting a post -->

@if (Session::has('flash_message'))

  <div class="callout success" data-closable>{{ Session::get('flash_message') }}
    <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (Session::has('flash_message_important'))
  <div class="callout alert" data-closable>{{ Session::get('flash_message_important')}}
    <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif