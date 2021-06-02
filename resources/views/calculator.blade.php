<div class="card">
    <div class="card-header">
        Калькулятор обоев
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <form id="calc">
                <div class="form-group">
                    <label for="lengthRoom">Длина комнаты</label>
                    <input type="text" class="form-control" id="lengthRoom">
                    <label for="widthRoom">Ширина комнаты</label>
                    <input type="text" class="form-control" id="widthRoom">
                    <label for="heightRoom">Высота комнаты</label>
                    <input type="text" class="form-control" id="heightRoom">
                </div>
                <div class="form-group">
                    <label for="widthCheck">Выберите ширину</label>
                    <div id="widthCheck">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="width" id="width1" value="0.53" checked>
                            <label class="form-check-label" for="width1">
                                0.53
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="width" id="width2" value="1.06">
                            <label class="form-check-label" for="width2">
                                1.06
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="widthCheck">Выберите длину</label>
                    <div id="widthCheck">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="length" id="length1" value="10" checked>
                            <label class="form-check-label" for="length1">
                                10
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="length" id="length2" value="25">
                            <label class="form-check-label" for="length2">
                                25
                            </label>
                        </div>
                    </div>
                </div>
                <div class="calc-result">
                    <h5>Необходимое количество рулонов: <span class="result"></span></h5>
                </div>
                <button type="submit" class="btn btn-primary">Посчитать</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(() => {
        $('#calc').on('submit', function (e) {
            e.preventDefault()
            const lengthRoom = parseFloat($('#lengthRoom').val().trim().replace(/,/,"."))
            if (isNaN(lengthRoom) || lengthRoom <= 0) {
                $('#lengthRoom').css('border-color', 'red')
                return
            }
            const widthRoom = parseFloat($('#widthRoom').val().trim().replace(/,/,"."))
            if (isNaN(widthRoom) || widthRoom <= 0) {
                $('#widthRoom').css('border-color', 'red')
                return
            }
            const heightRoom = parseFloat($('#heightRoom').val().trim().replace(/,/,"."))
            if (isNaN(heightRoom) || heightRoom <= 0) {
                $('#heightRoom').css('border-color', 'red')
                return
            }
            const length = parseFloat($('input[name="length"]:checked').val().trim().replace(/,/,"."))
            if (isNaN(length) || length <= 0) {
                $('input[name="length"]:checked').css('border-color', 'red')
                return
            }
            const width = parseFloat($('input[name="width"]:checked').val().trim().replace(/,/,"."))
            if (isNaN(width) || width <= 0) {
                $('input[name="width"]:checked').css('border-color', 'red')
                return
            }

            const result = Math.ceil((2*(lengthRoom+widthRoom)*heightRoom)/(width*length))
            $('.calc-result .result').text(result)
            $('.calc-result').show()
        })
    })
</script>
<style>
    .calc-result{
        display: none;
    }
    .result{
        font-size: 18px
    }
</style>