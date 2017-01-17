@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="content"></div>
        <div class="loading"></div>
    </div>
    <script>
        function ajaxLoad(filename, content) {
            content = typeof content !== 'undefined' ? content : 'content';
            $('.loading').show();
            $.ajax({
                type: "GET",
                url: filename,
                contentType: false,
                success: function (data) {
                    $("#" + content).html(data);
                    $('.loading').hide();
                },
                error: function (xhr, status, error) {
                    alert(xhr.responseText);
                }
            });
        }
        $(document).ready(function () {
            ajaxLoad('/list');
        });
    </script>
@endsection