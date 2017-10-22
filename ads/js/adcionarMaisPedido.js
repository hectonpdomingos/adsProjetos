
    $(document).ready(function () {
        var maxField = 100; //Input fields increment limitation
        var addButton = $('.add_button'); //selector
        var wrapper = $('.field_wrapper'); // wrapper
        var fieldHTML = {
            row: function (f) {
                return '<div><div class="row"><div class="col-xs-6 col-sm-3"><input type="text" class="form-control"  name="field_name[' + f +
                    '][]" value=""/></div><div class="col-xs-6 col-sm-3"><input type="text" class="form-control"  name="field_name[' + f +
                    '][]" value=""/></div><div class="col-xs-6 col-sm-1"><input type="text" class="form-control"  name="field_name[' + f +
                    '][]" value=""/></div><div class="col-xs-6 col-sm-2"><input type="text" class="form-control"  name="field_name[' + f +
                    '][]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field">Remover Pedido</a></div></div>';
            }
        };

        var x = 1; //Initial field counter is 1
        $(addButton).click(function () { //Once add button is clicked
            if (x < maxField) { //Check maximum number of input fields
                x++; //Increment field counter
                $(wrapper).append(fieldHTML.row(x)); // Add field html
            }
        });
        $(wrapper).on('click', '.remove_button', function (e) { //Once remove button is clicked
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
