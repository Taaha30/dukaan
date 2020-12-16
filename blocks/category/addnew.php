<form class="validateform bigform">
      <label class="inline-form">
            Category<br>
              <input type="text" name="category"  required>
              <span class="validate"></span>
      </label>
      <br>
      <div id="error"></div><br>
      <button type="button" value="Submit" id="addews" onclick="addCategory(this.id, 'cat-table');">Add</button>
    </form>
