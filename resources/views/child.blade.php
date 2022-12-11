@extends('parent')

@section('search')
<div class="search-content">
    <p>Search will be displayed here</p>
</div>

<script>

    @section('childCall')
    console.log("Child call");
    console.log("another child call");
    @endsection

</script>
@endsection
