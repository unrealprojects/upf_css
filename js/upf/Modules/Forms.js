(function($){

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Dropdown Settings
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    var Dropdown__Element =     '.Dropdown',
        Dropdown__Content =     '.Dropdown-Content',
        Dropdown__Title =       '.Dropdown-Title',
        Dropdown__Toggle =      '.Dropdown-Toggle',

        Dropdown__Collapsed =   'Collapsed',
        Dropdown__Expanded =    'Expanded',

        Dropdown__Duration =     160;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Input - Select Settings
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    var InputSelect__Element =              '.Input-Select',
        InputSelect__Content =              '.Input-Select-Content',
        InputSelect__Item =                 'li',
        InputSelect__Clean =                '.Input-Select-Clean',
        InputSelect__Toggle =               '.Input-Select-Toggle',
        InputSelect__Input_Value =          'input[type=text]',
        InputSelect__Input_Index =          'input[type=hidden]',

        InputSelect__Collapsed =            'Collapsed',
        InputSelect__Expanded =             'Expanded',

        InputSelect__Item_Hidden =          'Hidden',
        InputSelect__Item_Visible =         'Visible',


        InputSelect__Data_Index =           'data-index',
        InputSelect__Data_Selected_Index =  'data-selected-index',

        InputSelect__Duration =             120;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Script Settings
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    var Script__Element = '.Script';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Dropdown
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    var Dropdown = function () {

        // Presets
        $(Dropdown__Element).addClass(Dropdown__Collapsed);
        var Toggle = false;

        // Body
        $(document).on('click', Dropdown__Title, function () {
            $(Dropdown__Element + '.' + Dropdown__Expanded).not($(this).parent()).find(Dropdown__Content).slideUp(Dropdown__Duration);
            $(Dropdown__Element + '.' + Dropdown__Expanded).not($(this).parent()).find(Dropdown__Toggle).animate({transform: 'rotate(0deg)'}, Dropdown__Duration);
            $(Dropdown__Element + '.' + Dropdown__Expanded).not($(this).parent()).removeClass(Dropdown__Expanded).addClass(Dropdown__Collapsed);

            $(this).parents(Dropdown__Element).find(Dropdown__Content).slideToggle(Dropdown__Duration);
            $(this).parents(Dropdown__Element).toggleClass(Dropdown__Collapsed + ' ' + Dropdown__Expanded);

            // Toggle Button
            if (!Toggle) {
                $(this).parents(Dropdown__Element).find(Dropdown__Toggle).animate({transform: 'rotate(-180deg)'}, Dropdown__Duration);
                Toggle = true;
            } else {
                $(this).parents(Dropdown__Element).find(Dropdown__Toggle).animate({transform: 'rotate(0deg)'}, Dropdown__Duration);
                Toggle = false;
            }

            return false;
        });

        // Focus Out
        $(document).on('click', 'body', function () {
            $(Dropdown__Element + '.' + Dropdown__Expanded).find(Dropdown__Content).slideUp(Dropdown__Duration);
            $(Dropdown__Element + '.' + Dropdown__Expanded).find(Dropdown__Toggle).animate({transform: 'rotate(0deg)'}, Dropdown__Duration);
            $(Dropdown__Element + '.' + Dropdown__Expanded).removeClass(Dropdown__Expanded).addClass(Dropdown__Collapsed);
        });
    };

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Input Select
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    var InputSelect = function () {
        // Todo::Show-Hide InputSelect__Clean
        // Todo:: data-ajax
        // Todo:: data-multiselect
        // Todo:: data-multiselect



        // Show List
        $(document).on('click', InputSelect__Element, function () {

            $(InputSelect__Content, this).slideDown(InputSelect__Duration, function () {
                $(this).parent()
                    .addClass(InputSelect__Expanded)
                    .removeClass(InputSelect__Collapsed);
                $(InputSelect__Toggle, $(this).parent()).animate({transform: 'rotate(180deg)'}, InputSelect__Duration);
            });

            return false;
        });

        // Hide List
        $(document).on('click', 'body', function () {
            $(InputSelect__Content).slideUp(InputSelect__Duration, function () {
                $(this).parent()
                    .addClass(InputSelect__Collapsed)
                    .removeClass(InputSelect__Expanded);
                $(InputSelect__Toggle,$(this).parent()).animate({transform: 'rotate(0deg)'}, InputSelect__Duration);
            });
        });

        // Add Selected Value
        $(document).on('click', InputSelect__Content + ' ' + InputSelect__Item, function () {
            $(this).parents(InputSelect__Element).attr(InputSelect__Data_Selected_Index, $(this).attr(InputSelect__Data_Index) );
            $(InputSelect__Input_Index, $(this).parents(InputSelect__Element)).val($(this).attr(InputSelect__Data_Index));
            $(InputSelect__Input_Value, $(this).parents(InputSelect__Element)).val( $(this).text());
        });

        // Type
        // Todo::Search By different words
        $(document).on('keyup', InputSelect__Element + ' ' + InputSelect__Input_Value, function () {

            var Filter = $(this).val().toLowerCase();
            if(Filter.length) {
                $(InputSelect__Content + ' ' + InputSelect__Item, $(this).parent()).each(function (ItemKey, Item) {
                    if ($(Item).text().toLowerCase().indexOf(Filter) >= 0) {
                        $(Item).removeClass(InputSelect__Item_Hidden)
                            .addClass(InputSelect__Item_Visible)
                            .slideDown();
                    } else {
                        $(Item).addClass(InputSelect__Item_Hidden)
                            .removeClass(InputSelect__Item_Visible)
                            .slideUp();
                    }
                });
            }else{
                // Todo::Make a Function
                $(InputSelect__Content + ' ' + InputSelect__Item, $(this).parent()).removeClass(InputSelect__Item_Hidden)
                    .addClass(InputSelect__Item_Visible)
                    .slideDown();
            }
        });

        // Clean
        $(document).on('click',InputSelect__Element + ' ' + InputSelect__Clean,function(){
            $(InputSelect__Input_Index, $(this).parent()).val(' ');
            $(InputSelect__Input_Value, $(this).parent()).val(' ');

            // Todo::Make a Function
            $(InputSelect__Content + ' ' + InputSelect__Item, $(this).parent()).removeClass(InputSelect__Item_Hidden)
                .addClass(InputSelect__Item_Visible)
                .slideDown();
        });

    };

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////








////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Select
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    var Script = function () {
        $(document).on('click', Script__Element, function () {
            return false;
        });
    };

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Execute
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Dropdown();
    InputSelect();
    Script();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


})(jQuery);
