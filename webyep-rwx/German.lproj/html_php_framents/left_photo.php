<?php
	if (webyep_bCheckImage("FotoLinks$sFieldPostfix", $iLeftPhotoWidth, $sWidthCSS) || webyep_bIsEditMode()) {
?>
<!-- Left Photo: ======================================== -->
<?php
   printf('<div style="float: left; margin-right: %dpx; margin-bottom: %dpx;%s" class="WebYepLeftPhoto"><div>', $iLeftPhotoPadding, $iLeftPhotoPadding, $sWidthCSS);
   webyep_image("FotoLinks$sFieldPostfix", false, "", "", "", $iLeftPhotoWidth, 0, ##LeftPhotoIsThumb##);
   echo "</div>";
	if (webyep_sShortTextContent("FotoLinksBildtext$sFieldPostfix", false) || webyep_bIsEditMode()) {
?><div style="padding-top: 4px; text-align: center;"><?php webyep_shortText("FotoLinksBildtext$sFieldPostfix", false); ?></div><?php } echo "</div>"; } ?>
