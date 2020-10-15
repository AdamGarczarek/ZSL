<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
  </head>
  <body>
    <form action="zadanie.php" method="get">
      <table>
        <tr>
          <th>Name</th>
          <th>Value</th>
        </tr>
        <tr>
          <td>Name</td>
          <td>
            <input type="text" name="name">
          </td>
        </tr>
        <tr>
          <td>Sex</td>
          <td>
            <input type="radio" name="sex" value"m">Male<br>
            <input type="radio" name="sex" value"f">Female
          </td>
        </tr>
        <tr>
          <td>Eye color</td>
          <td>
            <select name="eye">
              <option value="g">green</option>
              <option value="br">brown</option>
              <option value="bl">blue</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Check all that apply</td>
          <td>
            <input type="checkbox" name="check">Over 6 feet tall<br>
            <input type="checkbox" name="check">Over 200 pounds
          </td>
        </tr>
        <tr>
          <th colspan="2">
            <h5>Describe your athletic ability:</h5>
            <input type="text" name="description">
          </th>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="Enter my information">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
