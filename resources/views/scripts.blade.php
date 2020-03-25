<script>

    function deleteTask(dataId) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                _method: 'DELETE',
                _token: '{!! csrf_token() !!}',
            },
            url: '{{ url('tasks') }}'+ '/' + dataId,
            success: function(data)
            {
                if(data.success)
                {
                    window.location = data.url
                }
            }
        })
    };

</script>
