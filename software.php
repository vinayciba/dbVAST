<html>
<title>dbVAST</title>
<center>
<img src="images\dbvast.png" height="250" width="1000" >
<body>
<br><br>

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
<b>Input</b><br>
The dbVAST is a retrievable database of coding Single Nucleotide Polymorphisms in three shrimp species. Users have to select a shrimp species and submit a query sequence in which he/she is interested to know SNP positions.
<br><b>Output</b><br>
A blastn search is performed for the query sequence against annotated transcripts of respective shrimp species. The blastn search identifies the most similar annotated transcript of respective shrimp species in the database. Then the following information is displayed on screen which can be downloaded.</li>
<li>The high quality SNPs in the transcript that is more similar to query sequence.</li>
<li>The blast statistics of the most similar transcript against non-redundant protein database of NCBI &
<li>The sequence of the most similar transcript.</li><br>
<b>How dbVAST is built?</b><br>
<i>Raw data</i>
<table bgcolor="#ffdead">
<tr><td><b>Species</b></td><td><b>RNAseq datasets to build reference transcripts</b>
</td><td><b>Pooled RNAseq datasets to find SNPs</b>
</td></tr>
<tr><td><i>P. indicus</i></td><td>SRX4808137,SRX4808138 and SRX4808143</td><td>SRX4808140,SRX4808141,SRX4808142 </td></tr>
<tr><td><i>P. vannamei</i></td><td>SRX3556257and SRX3556279</td><td>SRX1870278</td></tr>
<tr><td><i>P. aztecus</i></td><td>SRX3556257 and SRX3556279</td><td>SRX1871046</td></tr>
</table>


<i>Methodology</i>	<br>
Reference transcripts were built with raw sequence reads using Trinity v2.3.2. These transcripts were blasted (blastx with non-redundant protein database of NCBI), mapped and annotated with Blast2GO v4.1.9 to obtain blast statistics. Then pooled RNAseq reads were then mapped back to annotated transcripts using bowtie2 v2.3.2 tool. Thereafter the output was processed with samtools-1.2 and bcftools-1.3.1 to find SNPs.<br>
<i>SNP criteria</i></br>
Only the SNPs with raw read depth of ≥ 10, reference and alternate alleles supported by at least 5 reads and phred-scaled quality score of ≥ 20 were included in database.

</div>
</td>
