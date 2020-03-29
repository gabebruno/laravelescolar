<script>

    function deleteSala(dataId) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                _method: 'DELETE',
                _token: '{!! csrf_token() !!}',
            },
            url: '{{ url('gestor') }}'+ '/sala/' + dataId,
            success: function(data)
            {
                if(data.success)
                {
                    window.location = data.url
                }
            }
        })
    };

    function deleteUsuario(dataId) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                _method: 'DELETE',
                _token: '{!! csrf_token() !!}',
            },
            url: '{{ url('/') }}'+ '/usuario/' + dataId,
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
