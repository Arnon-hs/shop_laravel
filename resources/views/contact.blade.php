<div class="card">
    <div class="card-header">
        Закажите обратную связь
    </div>
    <div class="card-body">
        <div class="row">
            <form id="contact-form">
                <input type="email" class="form-control" name="email" value="{{empty(auth()->user()->email)?'':auth()->user()->email}}">
                <button type="submit" class="btn btn-primary">Заказать звонок</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(() => {
        $('#contact-form').on('submit', function (e) {
            e.preventDefault()
            const email = $('#contact-form input[name="email"]').val().trim()
            $.ajax({
                type: "POST",
                url: "{{route('api.contact')}}",
                data: {
                    email: email
                },
                success: function (response) {
                    console.log(response)
                }
            });
        })
    })
</script>