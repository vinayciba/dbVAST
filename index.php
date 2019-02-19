<html>
<title>dbVAST</title>
<center>
<img src="images\dbvast.png" height="250" width="1000" >
<body>
<br><br>

<?php
include("cn.php");
$res=mysql_query("select * from seqs");
$num_rows = mysql_num_rows($res);

?>

<table width="1000" CELLPADDING="10">
<tr>
<td width="100" rowspan="10" style="vertical-align:top">
<a href="index.php"><img src="images\bhome.png"></a><br>
<a href="query.php" style="white-space:nowrap"><img src="images\bsubmit.png"></a>
<a href="software.php" style="white-space:nowrap"><img src="images\software.png"></a>
<a href="contact.php" style="white-space:nowrap"><img src="images\bcontact.png"></a>

</td>
<td  style="vertical-align:top"> 
<div style="font-size:26px" >
The non-synonymous Single Nucleotide Polymorphisms (SNPs) are of significance in genetic improvement programs as they might affect function of protein products. Here, we report a database of SNPs in annotated transcripts of shrimp, dbVAST for three shrimp species, Penaeus indicus, Penaeus vannamei and Penaeus aztecus. The dbVAST database is built with annotated transcripts, SNPs in annotated transcripts and blast statistics of annotated transcripts in three shrimp species. The dbVAST is intended to benefit researchers by showcasing variations in the candidate transcripts of shrimp.
</font>
</div>
</td>
</tr>
</table>
<br><br>
<br><br><br>
<hr width="1000">

<table>
<tr><td align="left">
<div style="font-size:26px" >
<font color="red">
<?php
echo "Number of sequences Analysed : ";
echo $num_rows;
?>
</div>
</td>
</tr></table>


