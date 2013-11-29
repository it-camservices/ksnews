<?php require_once '../myinclude/head.php' ?>
<table>
	<thead>
		<tr>
			<th colspan="2">Category</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Category:</td>
			<td><input type="text" name="category" /></td>
		</tr>
		<tr>
			<td>Alias:</td>
			<td><input type="text" name="alias" /></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">Add</button></td>
		</tr>
	</tbody>
</table>
<table>
	<thead>
		<tr>
			<th colspan="2">Menu</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Menu:</td>
			<td><input type="text" name="menu" /></td>
		</tr>
		<tr>
			<td>Alias:</td>
			<td><input type="text" name="alias" /></td>
		</tr>
		<tr>
			<td>Category:</td>
			<td>
				<select name="category">
					<option>...please select...</option>
			<?php 
				$cateObj = new Category(); 
				$categories = $cateObj->getAll();
				foreach ($categories as $category) {
					echo "<option value='" . $category->id . "'>" . $category->category . "</option>";
				}
			?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">Add</button></td>
		</tr>
	</tbody>
</table>
<?php require_once 'include/_footer.php' ?>