<?
class Admin_Widget_Legend
{

	public static  function getEditLegend($text, $name){
        return "<div class='legend'><div style='float: left;'>" . $text . ": <span>" . $name . "</span></div><div class='mini_tool'><img src='/admin/design/img/back.png' height='22' onclick='history.back()' title='�����'><a id='save' href='#'><img src='/admin/design/img/save.png' height='22' title='���������'></a></div></div>";
    }


}