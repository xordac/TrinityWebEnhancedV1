<br>
<?php builddiv_start(0, "Server Statistics"); ?>
<center>

<?php
if($num_chars == 0)
{
    echo "There are 0 characters on this realm.";
}
else
{
?>
<center>

<table width="90%">
	<tr>
		<td colspan="2" align="left" style="padding-left: 20px;"><img src="<?php echo $Template['path']; ?>/images/stat/battlegrounds-alliance.jpg" alt="Alliance" /></td>
		<td colspan="2" align="right" style="padding-right: 20px;"><img src="<?php echo $Template['path']; ?>/images/stat/battlegrounds-horde.jpg" alt="Horde" /></td>
	</tr>
	<tr>
		<td colspan="2" align="left" style="padding-left: 20px;">
            <strong>Alliance: </strong><?php echo $num_ally; ?> (<?php echo $pc_ally; ?>%)
        </td>
		<td colspan="2" align="right" style="padding-right: 20px;">
            <strong>Horde: </strong><?php echo $num_horde; ?> (<?php echo $pc_horde; ?>%)
        </td>
	</tr>
	<tr>
		<td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Human']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/icons/race/1-0.gif" alt="" /></td>
		<td align="left"><?php echo $data[1]; ?> (<?php echo $pc_human; ?>%)</td>
		<td align="right"><?php echo $data[2]; ?> (<?php echo $pc_orc; ?>%)</td>
		<td align="right"><img onmouseover="ddrivetip('<?php echo $lang['Orc']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/icons/race/2-0.gif" alt="" /></td>
	</tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Dwarf']; ?>')" onmouseout="hideddrivetip()"	src="<?php echo $Template['path']; ?>/images/icons/race/3-0.gif" alt="" /></td>
        <td align="left"><?php echo $data[3]; ?> (<?php echo $pc_dwarf; ?>%)</td>
        <td align="right"><?php echo $data[5]; ?> (<?php echo $pc_undead; ?>%)</td>
        <td align="right"><img onmouseover="ddrivetip('<?php echo $lang['Undead']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/icons/race/5-0.gif" alt="" /></td>
    </tr>
    <tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Nightelf']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/icons/race/4-0.gif" alt="" /></td>
        <td align="left"><?php echo $data[4]; ?> (<?php echo $pc_ne; ?>%)</td>
        <td align="right"><?php echo $data[6]; ?> (<?php echo $pc_tauren; ?>%)</td>
        <td align="right"><img onmouseover="ddrivetip('<?php echo $lang['Tauren']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/icons/race/6-0.gif" alt="" /></td>
    </tr>
    <tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Gnome']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/icons/race/7-0.gif" alt="" /></td>
        <td align="left"><?php echo $data[7]; ?> (<?php echo $pc_gnome; ?>%)</td>
        <td align="right"><?php echo $data[8]; ?> (<?php echo $pc_troll; ?>%)</td>
        <td align="right"><img onmouseover="ddrivetip('<?php echo $lang['Troll']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/icons/race/8-0.gif" alt="" /></td>
    </tr>
	<tr>
		<td colspan="2" align="left" style="padding-left: 20px;"></td>
		<td colspan="2" align="right" style="padding-right: 20px;"></td>
	</tr>
</table>

<table width="30%">
	<td colspan="2" align="left" style="padding-left: 20px;">
            <strong>Total Class Statistics</strong>
        </td>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Warrior']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/class/warrior.png" alt="" /></td>
        <td align="left"><?php echo $class[1]; ?> (<?php echo $pc_warrior; ?>%)</td>
	</tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Paladin']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/class/paladin.png" alt="" /></td>
		<td align="left"><?php echo $class[2]; ?> (<?php echo $pc_paladin; ?>%)</td>
    </tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Hunter']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/class/hunter.png" alt="" /></td>
		<td align="left"><?php echo $class[3]; ?> (<?php echo $pc_hunter; ?>%)</td>
    </tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Rogue']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/class/rogue.png" alt="" /></td>
		<td align="left"><?php echo $class[4]; ?> (<?php echo $pc_rogue; ?>%)</td>
    </tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Priest']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/class/priest.png" alt="" /></td>
		<td align="left"><?php echo $class[5]; ?> (<?php echo $pc_priest; ?>%)</td>
    </tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Shaman']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/class/shaman.png" alt="" /></td>
		<td align="left"><?php echo $class[7]; ?> (<?php echo $pc_shaman; ?>%)</td>
    </tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Mage']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/class/mage.png" alt="" /></td>
		<td align="left"><?php echo $class[8]; ?> (<?php echo $pc_mage; ?>%)</td>
    </tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Warlock']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/class/warlock.png" alt="" /></td>
		<td align="left"><?php echo $class[9]; ?> (<?php echo $pc_warlock; ?>%)</td>
    </tr>
	<tr>
        <td align="left"><img onmouseover="ddrivetip('<?php echo $lang['Druid']; ?>')" onmouseout="hideddrivetip()" src="<?php echo $Template['path']; ?>/images/class/druid.png" alt="" /></td>
		<td align="left"><?php echo $class[11]; ?> (<?php echo $pc_druid; ?>%)</td>
    </tr>
</table>
</center>
<?php
}
?>
</center>
<?php builddiv_end() ?>