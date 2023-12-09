<select class="form-select" id="teamId" name="teamId">
<?php
while ($teamItem = $teams->fetch_assoc()) {
  $selText = "";
  if ($selectedTeam == $teamItem['team_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $teamItem['team_id']; ?>"<?=$selText?>><?php echo $teamItem['teamId']; ?></option>
<?php
}
?>
</select>
