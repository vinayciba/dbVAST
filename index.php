<html>
<title>dbVAST</title>
<center>
<img src="images\dbvast.png" height="250" width="1000" >
<body>
<br><br>

<table width="1000" CELLPADDING="10">
<tr>
<td width="100" rowspan="10" style="vertical-align:top">

<a href="index.php" style="white-space:nowrap"><img src="images\bhome.png"></a>
<a href="software.php" style="white-space:nowrap"><img src="images\software.png"></a>
<a href="faq.php" style="white-space:nowrap"><img src="images\faq.png"></a>
<a href="contact.php" style="white-space:nowrap"><img src="images\bcontact.png"></a>

</td>
<td  style="vertical-align:top"> 
<form method="post" name="form1" action="">
<table width="700" >
<tr><td ><font size="5">Select shrimp Species : </font>

<select name="species">
<option value="1">Select</option>
<option value="2">Penaeus indicus</option>
<option value="3">Penaeus vannamei</option>
<!-- <option value="4">Penaeus aztecus</option> -->
</select>

</td></tr>
<tr><td ><font size="5"> Paste query sequence :</font></td></tr>
<tr><td >
<textarea style="width:100%; height:200" id="seq" name="seq"></textarea></td></tr>
<tr><td><input type="Submit" name="sub" id="sub" Value="Submit query">
<input onclick="input()" type="button" value="Load example" id="button"></td><br>
</tr>
</table>


<?php
include("cn.php");
if(isset($_POST['sub']))
{
$spsel = $_POST['species'];

$seq = $_POST['seq'];
mysql_query("insert into seqs(seq) values('$seq')");

##species indicus
if ($spsel=="1")
{
 echo "Select a shrimp species from the dropdown";
}
if ($spsel=="2")
{
$seq = $_POST['seq'];
$my_file = "query.fasta";
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
fwrite($handle, $seq);
fclose($handle);



exec("blastn -query query.fasta -db /var/www/html/dbvast/blastdb/indicusdb -outfmt 7 -out blastout.txt");
$bloutfile='blastout.txt';

foreach(file('blastout.txt') as $line) {
   	if (substr($line,0,1)!='#')
		{
		$lines[]= $line;
		}
		}

if (count($lines)<1)
	{
	echo "No similar transcript found in the database";
	}

else
	{
	$geneid= preg_split("/[\t]/", $lines[0]);
	$geneid=$geneid[1];
##generate sequence id file
	$my_id_file = "id.fasta";
	$handle = fopen($my_id_file, 'w') or die('Cannot open file:  '.$my_id_file); //implicitly creates file
	fwrite($handle, $geneid);
	fclose($handle);
	exec("fastacmd -d blastdb/indicusdb -i id.fasta > seq_out.fasta");
##
?>

<br><br>

<?php
$query="select * from blast where id='$geneid'";
$result = mysql_query($query);
$num_rows= mysql_num_rows($result);

echo "<b>Results</b>";
echo "<br><br>";
echo "Blast Statistics <br>";
echo "<table width=800 border=1>";
echo "<tr>";
echo "<td>Sequence </td>";
echo "<td>Description</td>";
echo "<td>Length </td>";
echo "<td>Blast Description </td>";
echo "<td>e-value</td>";
echo "<td>Similarity</td>";
echo "<td>Score</td>";
echo "<td>Enzyme Code</td>";
echo "<td>Enzyme Name</td>";
echo "</tr>";
$j=0;
while($j<$num_rows)
{
echo "</tr>";
$id=  mysql_result($result,$j,"id");
$seqdesc=  mysql_result($result,$j,"seqdesc");
$length=  mysql_result($result,$j,"length");
$blastdesc=  mysql_result($result,$j,"blastdesc");
$eval=  mysql_result($result,$j,"eval");
$similarity=  mysql_result($result,$j,"similarity");
$score=  mysql_result($result,$j,"score");
$enzcode=  mysql_result($result,$j,"enzcode");
$enzname=  mysql_result($result,$j,"enzname");
#echo "<td><a href=seq_out.fasta target=_blank>Sequence</a> </td>";
?>
<td>
<a href="#" onclick="window.open('seq_out.fasta', 'sequence' , 'toolbar=no,scrollbars=no,height=250,width=600,left=400,top=100'); return false;">Sequence</a>
</td>
<?php

//$blast_header = "Blast Statistics\nSequence\tDescription\tLength\tBlast Description\te-value\tSimilarity\tScore\tEnzyme Code\tEnzyme Name\n";
//$blast_stat = $blast_header . $blast_stat . "\n" . $seqdesc . "\t" . $length . "\t" . $blastdesc. "\t". $eval . "\t" . $similarity . "\t". $score. "\t". $enzcode . "\t". $enzname . "\n";
echo "<td>".$seqdesc."</td>";
echo "<td>".$length."</td>";
echo "<td>".$blastdesc."</td>";
echo "<td>".$eval."</td>";
echo "<td>".$similarity."</td>";
echo "<td>".$score."</td>";
echo "<td>".$enzcode."</td>";
echo "<td>".$enzname."</td>";
$j=$j+1;
echo "</tr>";
}
echo "</table>";

$query1="select * from quality where id='$geneid'";
$result1 = mysql_query($query1);
$num_rows1= mysql_num_rows($result1);
if ($num_rows1>0)
{
echo "<br><br>";
echo "SNP  Statistics <br>";
echo "<table width=800 border=1>";
echo "<tr>";
//echo "<td>Sequence</td>";
echo "<td>Position</td>";
echo "<td>Reference allele</td>";
echo "<td>Alternate allele </td>";
echo "<td>Phred score</td>";
echo "<td>Depth</td>";
echo "<td>Reference reads</td>";
echo "<td>Alternate reads</td>";
echo "</tr>";
$j=0;

while($j<$num_rows1)
{


echo "</tr>";
$id=  mysql_result($result1,$j,"id");
$pos=  mysql_result($result1,$j,"pos");
$ref=  mysql_result($result1,$j,"ref");
$alt=  mysql_result($result1,$j,"alt");
$phred=  mysql_result($result1,$j,"phred");
$depth=  mysql_result($result1,$j,"depth");
$refreads=  mysql_result($result1,$j,"refreads");
$altreads=  mysql_result($result1,$j,"altreads");

?>

<?php
$snp_header = "Position\tReference allele\tAlternate allele\tPhred score\tDepth\tReference reads\tAlternate reads";
$snp_stat_ind = $snp_stat_ind . $pos . "\t" . $ref . "\t" . $alt . "\t" . $phred . "\t" . $depth . "\t" . $refreads . "\t" . $altreads. "\n";
//display SNP table
echo "<td>".$pos."</td>";
echo "<td>".$ref."</td>";
echo "<td>".$alt."</td>";
echo "<td>".$phred."</td>";
echo "<td>".$depth."</td>";
echo "<td>".$refreads."</td>";
echo "<td>".$altreads."</td>";
$j=$j+1;
echo "</tr>";
}
echo "</table>";
//download snp table as a text file
echo "<br><center><a href='downloadsnps.php'>Download SNP Statistics</a></center>";
}
else
{ echo "<br>The Transcript Does not contain quality SNPs";
}}

//redirecting output to a text file
$resultsfile_ind = $snp_header . "\n" . $snp_stat_ind;
$myfile = 'blaststats.txt';
$handle = fopen($myfile, 'w') or die('Can the file not the open');
fwrite($handle, $resultsfile_ind);
fclose($handle);
}
### end indicus

### speceis vanami

if ($spsel=="3")
{
$seq = $_POST['seq'];
$my_file = "query.fasta";
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
fwrite($handle, $seq);
fclose($handle);


exec("blastn -query query.fasta -db /var/www/html/dbvast/blastdb/vanameidb -outfmt 7 -out blastout.txt");
$bloutfile='blastout.txt';

foreach(file('blastout.txt') as $line) {
   	if (substr($line,0,1)!='#')
		{
		$lines[]= $line;
		}
		}

if (count($lines)<1)
	{
	echo "No similar transcript found in the database";
	}

else
	{
	$geneid= preg_split("/[\t]/", $lines[0]);
	$geneid=$geneid[1];

##generate sequence id file
	$my_id_file = "id.fasta";
	$handle = fopen($my_id_file, 'w') or die('Cannot open file:  '.$my_id_file); //implicitly creates file
	fwrite($handle, $geneid);
	fclose($handle);
	exec("fastacmd -d blastdb/vanameidb -i id.fasta > seq_out.fasta");
##



?>

<br><br>

<?php

$query="select * from vanblast where id='$geneid'";
$result = mysql_query($query);
$num_rows= mysql_num_rows($result);

echo "<b>Results</b>";
echo "<br><br>";
echo "Blast Statistics <br>";
echo "<table width=800 border=1>";
echo "<tr>";
echo "<td>Sequence</td>";
echo "<td>Description</td>";
echo "<td>Length </td>";
echo "<td>Blast Description </td>";
echo "<td>e-value</td>";
echo "<td>Similarity</td>";
echo "<td>Score</td>";
echo "<td>Enzyme Code</td>";
echo "<td>Enzyme Name</td>";
echo "</tr>";
$j=0;
while($j<$num_rows)
{
echo "</tr>";
$id=  mysql_result($result,$j,"id");
$seqdesc=  mysql_result($result,$j,"seqdesc");
$length=  mysql_result($result,$j,"length");
$blastdesc=  mysql_result($result,$j,"blastdesc");
$eval=  mysql_result($result,$j,"eval");
$similarity=  mysql_result($result,$j,"similarity");
$score=  mysql_result($result,$j,"score");
$enzcode=  mysql_result($result,$j,"enzcode");
$enzname=  mysql_result($result,$j,"enzname");

?>
<td>
<a href="#" onclick="window.open('seq_out.fasta', 'sequence' , 'toolbar=no,scrollbars=no,height=250,width=600,left=400,top=100'); return false;">Sequence</a>
</td>
<?php
echo "<td>".$seqdesc."</td>";
echo "<td>".$length."</td>";
echo "<td>".$blastdesc."</td>";
echo "<td>".$eval."</td>";
echo "<td>".$similarity."</td>";
echo "<td>".$score."</td>";
echo "<td>".$enzcode."</td>";
echo "<td>".$enzname."</td>";
$j=$j+1;
echo "</tr>";
}
echo "</table>";

$query1="select * from vanqual where id='$geneid'";
$result1 = mysql_query($query1);
$num_rows1= mysql_num_rows($result1);
if ($num_rows1>0)
{
echo "<br><br>";
echo "SNP  Statistics <br>";
echo "<table width=800 border=1>";
echo "<tr>";
//echo "<td>Sequence </td>";
echo "<td>Position</td>";
echo "<td>Reference allele</td>";
echo "<td>Alternate allele </td>";
echo "<td>Phred score</td>";
echo "<td>Depth</td>";
echo "<td>Reference reads</td>";
echo "<td>Alternate reads</td>";
echo "</tr>";
$j=0;

while($j<$num_rows1)

{
echo "</tr>";
$id=  mysql_result($result1,$j,"id");
$pos=  mysql_result($result1,$j,"pos");
$ref=  mysql_result($result1,$j,"ref");
$alt=  mysql_result($result1,$j,"alt");
$phred=  mysql_result($result1,$j,"phred");
$depth=  mysql_result($result1,$j,"depth");
$refreads=  mysql_result($result1,$j,"refreads");
$altreads=  mysql_result($result1,$j,"altreads");

?>

<?php
$snp_header = "Position\tReference allele\tAlternate allele\tPhred score\tDepth\tReference reads\tAlternate reads";
$snp_stat_van = $snp_stat_van . $pos . "\t" . $ref . "\t" . $alt . "\t" . $phred . "\t" . $depth . "\t" . $refreads . "\t" . $altreads. "\n";
//display SNP table
echo "<td>".$pos."</td>";
echo "<td>".$ref."</td>";
echo "<td>".$alt."</td>";
echo "<td>".$phred."</td>";
echo "<td>".$depth."</td>";
echo "<td>".$refreads."</td>";
echo "<td>".$altreads."</td>";
$j=$j+1;
echo "</tr>";
}
echo "</table>";

//donwload SNP table in a text format
echo "<br><center><a href='downloadsnps.php'>Download SNP Statistics</a></center>";
}
else
{ echo "<br>The Transcript Does not contain quality SNPs";
}}

//redirect output to a text file
$resultsfile_van = $snp_header . "\n" . $snp_stat_van;
$myfile = 'blaststats.txt';
$handle = fopen($myfile, 'w') or die('Can the file not the open');
fwrite($handle, $resultsfile_van);
fclose($handle);
}
### end vanamei

### species aztecus
if ($spsel=="4")
{
$seq = $_POST['seq'];
$my_file = "query.fasta";
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
fwrite($handle, $seq);
fclose($handle);


exec("blastn -query query.fasta -db /var/www/html/dbvast/blastdb/vanameidb -outfmt 7 -out blastout.txt");
$bloutfile='blastout.txt';

foreach(file('blastout.txt') as $line) {
   	if (substr($line,0,1)!='#')
		{
		$lines[]= $line;
		}
		}

if (count($lines)<1)
	{
	echo "No similar transcript found in the database";
	}

else
	{
	$geneid= preg_split("/[\t]/", $lines[0]);
	$geneid=$geneid[1];

##generate sequence id file	
	$my_id_file = "id.fasta";
	$handle = fopen($my_id_file, 'w') or die('Cannot open file:  '.$my_id_file); //implicitly creates file
	fwrite($handle, $geneid);
	fclose($handle);
	exec("fastacmd -d blastdb/vanameidb -i id.fasta > seq_out.fasta");
##

?>

<br><br>

<?php
$query="select * from vanblast where id='$geneid'";
$result = mysql_query($query);
$num_rows= mysql_num_rows($result);

echo "<b>Results</b>";
echo "<br><br>";
echo "Blast Statistics <br>";
echo "<table width=800 border=1>";
echo "<tr>";
echo "<td>Sequence</td>";
echo "<td>Description</td>";
echo "<td>Length </td>";
echo "<td>Blast Description </td>";
echo "<td>e-value</td>";
echo "<td>Similarity</td>";
echo "<td>Score</td>";
echo "<td>Enzyme Code</td>";
echo "<td>Enzyme Name</td>";
echo "</tr>";
$j=0;
while($j<$num_rows)
{
echo "</tr>";
$id=  mysql_result($result,$j,"id");
$seqdesc=  mysql_result($result,$j,"seqdesc");
$length=  mysql_result($result,$j,"length");
$blastdesc=  mysql_result($result,$j,"blastdesc");
$eval=  mysql_result($result,$j,"eval");
$similarity=  mysql_result($result,$j,"similarity");
$score=  mysql_result($result,$j,"score");
$enzcode=  mysql_result($result,$j,"enzcode");
$enzname=  mysql_result($result,$j,"enzname");

?>
<td>
<a href="#" onclick="window.open('seq_out.fasta', 'sequence' , 'toolbar=no,scrollbars=no,height=250,width=600,left=400,top=100'); return false;">Sequence</a>
</td>
<?php
echo "<td>".$seqdesc."</td>";
echo "<td>".$length."</td>";
echo "<td>".$blastdesc."</td>";
echo "<td>".$eval."</td>";
echo "<td>".$similarity."</td>";
echo "<td>".$score."</td>";
echo "<td>".$enzcode."</td>";
echo "<td>".$enzname."</td>";
$j=$j+1;
echo "</tr>";
}
echo "</table>";

$query1="select * from pazqual where id='$geneid'";
$result1 = mysql_query($query1);
$num_rows1= mysql_num_rows($result1);
if ($num_rows1>0)
{
echo "<br><br>";
echo "SNP  Statistics <br>";
echo "<table width=800 border=1>";
echo "<tr>";
echo "<td>Sequence </td>";
echo "<td>Position</td>";
echo "<td>Reference allele</td>";
echo "<td>Alternate allele </td>";
echo "<td>Phred score</td>";
echo "<td>Depth</td>";
echo "<td>Reference reads</td>";
echo "<td>Alternate reads</td>";
echo "</tr>";
$j=0;

while($j<$num_rows1)

{
echo "</tr>";
$id=  mysql_result($result1,$j,"id");
$pos=  mysql_result($result1,$j,"pos");
$ref=  mysql_result($result1,$j,"ref");
$alt=  mysql_result($result1,$j,"alt");
$phred=  mysql_result($result1,$j,"phred");
$depth=  mysql_result($result1,$j,"depth");
$refreads=  mysql_result($result1,$j,"refreads");
$altreads=  mysql_result($result1,$j,"altreads");

?>
<td>
<a href="#" onclick="window.open('seq_out.fasta', 'sequence' , 'toolbar=no,scrollbars=no,height=250,width=600,left=400,top=100'); return false;">Sequence</a>
</td>
<?php
echo "<td>".$pos."</td>";
echo "<td>".$ref."</td>";
echo "<td>".$alt."</td>";
echo "<td>".$phred."</td>";
echo "<td>".$depth."</td>";
echo "<td>".$refreads."</td>";
echo "<td>".$altreads."</td>";
$j=$j+1;
echo "</tr>";
}
echo "</table>";
}
else
{ echo "<br>The Transcript Does not contain quality SNPs";
}}}
### end aztecus

}

?>
</form>
</td></tr>
</table>
<script>
function input(){
	var objDropDownMenu = document.getElementsByName("species")[0];
   var text = "AGTTGTCAACGAGTGGGACGACGGTAGGGAGTGTCTACGCCCTCCTTGGATTATAGGAAAATGAGGGTTA TCCTGGTCTTGTCGGTAGTGGCTGTTGCAGTCAATGCCAACAGCCATTTCCTCTCGGACAAATTTATCAA GTTGCTTCAGAGTGAGGATTCTACATGGGAGGCCGGAAGGAACTTCAACAAGCACCTCTCCATAAGGTAC TTCCGACGACTCATGGGTGTCCATCCCGATTCCAAATACCACATGCCCAAGTATGAAGTTCACCAGATTC CCGAGAACTTTGAATTGCCCAAAGAGTTTGACTCCAGAGCTGCATGGCCGATGTGTCCCACAATTGGTGA AATTCGTGATCAGGGTTCCTGTGGATCGTGCTGGGCATTTGGAGCTGTAGAGGTGATGAGTGACCGGCAG TGTATCCACAGTAAGGGCAAGAGCAACTTCCACTATTCTGCAGAGAATCTTGTGTCCTGTTGCCACCTCT GTGGTTTTGGATGTAACGGAGGCTTCCCAGGTGCAGCTTTCAAGTACTGGGTGCATAGTGGTATTGTCTC AGGGGGCTCGTTTAATTCCACTCAGGGATGTCAGCCCTATGAGATTGCTCCCTGTGAACATCACGTCCCA GGACCCCGACCCAAGTGCTCTGAGGGCGGCGGCACCCCAAAGTGTGCCAAGACATGCGAGAAGGGCTACA TAGTGGACTACGAGAGTGATTTGCATCATGGAGGCAAAGCATACAGCATCATGAAAGATGAAGACCAAAT TAAGTACGAGATCATGAAGAACGGGCCTGTGGAAGGAGCTTTCACCGTTTATGTGGACTTCCTTCACTAC AAGTCTGGTGTGTACCAGCACCGCCATGGCTTACCTTTGGGTGGACATGCCATCCGTGTCCTTGGATGGG GCGAAGAGAATGGTACTCCCTATTGGCTGTGTGCCAATTCATGGAACACCGACTGGGGTGACAATGGTCT GTTCAAGATTCTAAGAGGTTCAGATCACTGTGGTATTGAGAGTGAAATTTCAGCTGGGTTGCCTAAGTTG AATTAGTAACATGTATGATGGCAGTTCAAGGTTTCTTTTGCATGGTCAAAAAAAGTTAGAAATTGATATT AATGTAAGGTAGGCACGTCCCAAGTTTTAGTCAGGTATGGATTCTTTACTTATTTCTTAAAACGGCCATT GTTATTTCTTCATGACTGTACTCATGGTCTTCACTCCAATAGGGAATGTTAATCCAGTGATGTGGGATTT TCATTCAAAAGCATTGCCCTGTATTGTATTTTGTGTAGCTAATGTGCTGGTACCTCTGACATACAAGTTT TATGTAACTTTTCACATTTTCTTTGTGAAGCTAGATATAGTGATGTTGAACAGAAATTAAGATTTCATGT TGCTGAACTGTGATAATATGTCACAAAATACAACAACGCTAACAAAAAATGAAATAAAACATTCCAGGTT ATGTGTAATCATTAGTTTATATTTCTTTTCTGATTTTGATGTTTGTAAAGAAATAAATGTCTGATGTTCT GATAATAAATTTAATTTTACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";

    document.forms.form1.seq.value = text;

    objDropDownMenu.options[2].selected = true;

setTimeout(function(){alert("Example data is loaded, please click Submit query button"); }, 500);

}
</script>


</body>
</center>
</html>
