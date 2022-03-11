@extends('base.base')

@section('styles')
<style>
    .draggable {
        cursor: -webkit-grab;
        cursor: grab
    }

    .gu-unselectable .draggable {
        cursor: -webkit-grabbing;
        cursor: grabbing
    }

    #dd-with-handle .list-group .handle,
    .gu-mirror .handle {
        padding: 0 5px;
        background-color: rgba(34, 41, 47, .1);
        cursor: move;
        font-size: 1.2rem
    }

    #dd-with-handle .list-group,
    #multiple-list-group-a,
    #multiple-list-group-b {
        min-height: 5.714rem
    }

    #dd-with-handle .list-group .handle {
        margin-right: 5px
    }

    .gu-mirror .card {
        margin: 0 1rem
    }

    .gu-mirror .handle {
        margin-right: 5px
    }

    .dark-layout .gu-mirror {
        color: #B4B7BD
    }

    .dark-layout .gu-mirror:not(.badge):not([class*=col-]) {
        background-color: #283046;
        border-color: #3B4253;
        box-shadow: 0 4px 24px 0 rgba(34, 41, 47, .24)
    }
</style>
@endsection
@section('scripts')
<script type="text/javascript">
    $(function () {
'use strict';

// Draggable Cards
dragula([document.getElementById('card-drag-area')]);

// Sortable Lists
dragula([document.getElementById('basic-list-group')]);
dragula([document.getElementById('multiple-list-group-a'), document.getElementById('multiple-list-group-b')]);

// Cloning
dragula([document.getElementById('badge-list-1'), document.getElementById('badge-list-2')], {
    copy: true
});

// With Handles

dragula([document.getElementById('handle-list-1'), document.getElementById('handle-list-2')], {
moves: function (el, container, handle) {
return handle.classList.contains('handle');
}
});
});
</script>
@endsection
