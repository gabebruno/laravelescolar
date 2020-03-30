<script>

    function deleteSala(dataId) {
        $.ajax({
            type: 'DELETE',
            dataType: 'json',
            data: {
                _token: '{!! csrf_token() !!}',
            },
            url: '/sala/' + dataId,
            success: function(data)
            {
                if(data.success)
                {
                    window.location = data.url
                }
            }
        })
    }

    function deleteProfessor(dataId) {
        $.ajax({
            type: 'DELETE',
            dataType: 'json',
            data: {
                _token: '{!! csrf_token() !!}',
            },
            url: '/professor/' + dataId,
            success: function(data)
            {
                if(data.success)
                {
                    window.location = data.url
                }
            }
        })
    }


</script>
