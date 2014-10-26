Grid = {};

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Multi Rows
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Grid.MultiRow = function()
{
    // Default Variables
    var Grid_Class            =   '.Grid.Multi-Row',         // Used Grid Class Names
        Node_Class            =   'Node',                    // Node Class Name
        Class_Open_Row        =   'Row-Open',                // Default Row-Open Class Name
        Class_Close_Row       =   'Row-Close',               // Default Row-Open Class Name
        Class_First_Row       =   'Row-First';               // Default Row-Open Class Name

    // Each Grid
    $(Grid_Class).each(function(GridKey,Grid)
    {
        var Grid_Width = $(Grid).width();

        var Row_Width = 0;
        var Row_Count = 0;

        // Each Node
        $(Grid).find('>[class*='+Node_Class+']').each(function(Node_Key,Node)
        {
            var Node_Width = Math.floor($(Node).outerWidth(true));
            var Node_Margin = parseInt($(Node).css('margin-right'));

            // First Node
            if(Node_Key==0)
            {
                $(Node).addClass(Class_Open_Row).addClass(Class_First_Row);
                Row_Width += Math.floor($(Node).outerWidth(true));
            }
            // Count Nodes
            else
            {
                console.log(Row_Width);
                if(Row_Count==0)
                {
                    $(Node).addClass('Row-First');
                }
                // Row Growth
                if( (Row_Width+Node_Width-Node_Margin) <= Grid_Width )
                {
                    Row_Width += Node_Width;
                }
                // Row Full
                else
                {
                    $(Node).prev().addClass(Class_Close_Row);
                    $(Node).addClass(Class_Open_Row);

                    Row_Width = Math.floor($(Node).outerWidth(true));
                    Row_Count++;

                    // Last Node
                    if(!$(Node).next().length)
                    {
                        $(Node).addClass(Class_Close_Row);
                    }
                }
            }
        });
    });

    Grid.MultiRow.Reset = function()
    {
        $(Grid_Class + ' [class*=' + Node_Class + ']').removeClass(Class_Open_Row + ' ' + Class_Close_Row + ' ' + Class_First_Row);
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Reset
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    Grid.MultiRow();
    $(window).resize(function(){
        Grid.MultiRow.Reset();
        Grid.MultiRow();
    });

});








