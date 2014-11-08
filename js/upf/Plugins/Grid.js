/*var Grid = function(){

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Multi Rows
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Grid.MultiRow = function()
{
    // Default Variables
    var Grid_Class            =   '.Grid.Multi-Row',         // Used Grid Class Names
        Node_Class            =   'Col',                    // Node Class Name
        Class_Open_Row        =   'Row-Open',                // Default Row-Open Class Name
        Class_Close_Row       =   'Row-Close',               // Default Row-Close Class Name
        Class_First_Row       =   'Row-First';               // Default Row-First Class Name

    // Each Grid
    $(Grid_Class).each(function(GridKey,Grid)
    {
        var Grid_Width = $(Grid).width();

        var Row_Width = 0;
        var Row_Count = 1;

        // Each Node
        $(Grid).find('>[class*='+Node_Class+']').each(function(Node_Key,Node)
        {
            var Node_Width = Math.floor($(Node).outerWidth(true));
            var Node_Margin = parseInt($(Node).css('margin-right'));

            // First Node
            if(Node_Key==0)
            {
                $(Node).addClass(Class_Open_Row).addClass('Row-'+Row_Count);
                Row_Width += Math.floor($(Node).outerWidth(true));
            }

            else
            {

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
                    // Count Nodes

                    Row_Count++;

                    // Last Node
                    if(!$(Node).next().length)
                    {
                        $(Node).addClass(Class_Close_Row);
                    }
                }

            }
            $(Node).addClass('Row-'+Row_Count);

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

Grid.Vertical = function()
{
    var Grid_Class    =   '.Grid.Vertical',         // Used Grid Class Names
        Node_Class    =   'Col';

    // Each Grid
    $(Grid_Class).each(function(GridKey,Grid)
    {
        var Nodes_Difference = [];
        var Nodes_Full_Height = [];
        var Grid_Height = 0;
        // Each Row
        for(var RowCounter = 1; ; RowCounter++){
            if($('.Row-'+RowCounter, Grid).length>0)
            {

                // Current
                var Nodes_Height = $('.Row-'+RowCounter, Grid).map(function(){
                    return $(this).height();
                });

                var Nodes_Outer_Height = $('.Row-'+RowCounter, Grid).map(function(){
                    return $(this).outerHeight(true);
                });

                // Add
                $.each(Nodes_Outer_Height,function(ItemKey,Item){
                    if(Nodes_Full_Height[ItemKey]!=undefined){
                        Nodes_Full_Height[ItemKey] += Item;
                    }else{
                        Nodes_Full_Height[ItemKey] = Item;
                    }
                });


                var Nodes_Max_Height = Math.max.apply(null, Nodes_Height);

                Grid_Height += Nodes_Max_Height;


                // Difference
                $.each(Nodes_Height,function(ItemKey,Item){
                    if(Nodes_Difference[ItemKey]!=undefined){
                        Nodes_Difference[ItemKey] = Nodes_Difference[ItemKey] + Nodes_Max_Height - Item;
                    }else{
                        Nodes_Difference[ItemKey] = Nodes_Max_Height - Item;
                    }
                });

                // Deduction
                $('.Row-'+(RowCounter+1), Grid).each(function(Node_Key,Node){
                    $(Node).css('top','-'+Nodes_Difference[Node_Key]+'px');
                });
            }
            else
            {
                break;
            }
        }
        Grid_Height = Math.max.apply(null ,Nodes_Full_Height);
        console.log(Nodes_Full_Height);
        $(Grid).css('height',Grid_Height+'px');
    });

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Start
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    Grid.MultiRow();

    $(window).resize(function(){
        Grid.MultiRow.Reset();
        Grid.MultiRow();
    });

    Grid.Vertical();
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/