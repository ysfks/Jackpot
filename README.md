# Jackpot
Find three repeated characters in an array with 5 indexes
<p><strong>Status:</strong> If the first three character is same then return true</p>
<p><strong>Symbol:</strong> If Status is true, then write the character/symbol</p>
<p><strong>Count:</strong> If Status is true, then write how many times the symbol is repeated</p>

<strong>P.S.</strong> J is joker item. If the first symbol/character is J, then the first character after J will be written as <strong>Symbol</strong>
<p><strong>Example:</strong></p>
<table border=1>
<tr><th>Array Items</th> 	 <th>Status</th>	 <th>Symbol</th>  <th>Count</th></tr>
<tr>
<td>A, A, A, D, G</td>  	<td>true</td>  		<td>A</td>  			<td>3</td> 
</tr>
<tr>
<td>C, A, A, A, E</td>   	<td>false</td>   		<td>C</td>   			<td>1</td>  
</tr>
<tr>
<td>B, B, B, E, B</td>   	<td>true</td>   		<td>B</td>   			<td>3</td>  
</tr>
<tr>
<td>A, A, B, A, A</td>   	<td>false</td>   		<td>A</td>   			<td>2</td>  
</tr>
<td>A, J, A, C, E</td>   	<td>true</td>   		<td>A</td>   			<td>3</td>  
<tr>
<td>J, A, A, A, G</td>   	<td>true</td>   		<td>A</td>   			<td>4</td>  
</tr>
<tr>
<td>J, J, A, J, G</td>   	<td>true</td>   		<td>A</td>   			<td>4</td>  
</tr>
<tr>
<td>A, A, A, D, J</td>   	<td>true</td>   		<td>A</td>   			<td>3</td> 
</tr>
</table>
