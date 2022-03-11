@extends('base.base')

@section('scripts')
<script src="{{ asset('demo1/plugins/custom/draggable/draggable.bundle.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    var KTCardDraggable = function () {
return {
//main function to initiate the module
init: function () {
var containers = document.querySelectorAll('.draggable-zone');

if (containers.length === 0) {
return false;
}

var swappable = new Sortable.default(containers, {
draggable: '.draggable',
handle: '.draggable .draggable-handle',
mirror: {
appendTo: 'body',
constrainDimensions: true
}
});
}
};
}();

jQuery(document).ready(function () {
KTCardDraggable.init();
});
</script>
@endsection
