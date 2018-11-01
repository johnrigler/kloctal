# kloctal
An Octal system which embeds meaning into trivial cryptocurrency transactions in a highly accessible format

In this example. I initialized the zcash account with a message in a way that anyone with a zcash wallet or account such as poloniex can use.  Right now you have to figure out the transaction sizes yourself, but this script demonstrates how to decipher them.  The 
codes are revealed by using the following table:

<pre>
	1	2	3	4	5	6	7	8
1	a	b	c	d	e	f	g	h
2	i	j	k	l	m	n	o	p
3	q	r	s	t	u	v	w	x
4	y	z						

</pre>
To embed the word 'dog' in two small transactions, I send:

<p>
<br>0.00001427  <-- 'd' and 'o'
<br>0.000017    <-- 'g'

The initialization code is currently ignored, but is to mean:
<pre>
0.00010402
     ^ ^ ^
     | | \------ 2 transactions
     | \-------- look at the last 4 digits
     \---------- method 1 (other methods use sets of hashes as well as kloctal) 
</pre>
