<!-- <script src="Jquery.js"></script> -->
<div id="edu_div">

<div id="div_edu">
  <table>
    <tr>
      <td>Degree</td>
    </tr>
      <tr>
        <td>
          <select  style="width: 350px; height: 50px;" id="degree" name="degree">
            <?php 
              if($edited_education){ 
            ?>
              <option  value="">Select One</option>
              @if($edited_education->Degree=="Non-Matriculation")
              <option  value="Non-Matriculation" data-deglvl="836" selected="selected"> Non-Matriculation</option>
              <option  value="Matriculation/O-Level" data-deglvl="838"> Matriculation/O-Level</option>
              @elseif($edited_education->Degree=="Matriculation/O-Level")
              <option  value="Matriculation/O-Level" data-deglvl="838" selected="selected"> Matriculation/O-Level</option>
              <option  value="Non-Matriculation" data-deglvl="836"> Non-Matriculation</option>
              @endif
            <?php 
              }
              else{
            ?>
            <option  value="">Select One</option>
            <option  value="Non-Matriculation" data-deglvl="836"> Non-Matriculation</option>
            <option  value="Matriculation/O-Level" data-deglvl="838"> Matriculation/O-Level</option>
            <?php 
              } 
            ?>
          </select>
        </td>   
      </tr>
      <tr>
        <td>
          Field of Study:
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" name="feild_of_study" id="feild_of_study" style="width: 350px; height: 50px;" required="" value="<?php if($edited_education){
              echo $edited_education->Feild_of_study;
          }?>"> 
          <p id="error_field_of_study" style="font-style: italic; color: red;"></p>
          <span id="ids1"></span>
        </td>
      </tr>
      <tr>
        <td>
          Location:
        </td>
      </tr>
      <tr>
        <td>
         <select placeholder="City" id="location" name="location" style="width: 350px; height: 50px;">
          <?php 
          if($edited_education){ 
          ?>
            @if($edited_education->Location=="Islamabad")
            <option value="Islamabad" selected="selected">Islamabad</option>
            <option value="Karachi">Karachi</option>
            <option value="Lahore">Lahore</option>
            @elseif($edited_education->Location=="Karachi")
            <option value="Karachi" selected="selected">Karachi</option>
            <option value="Islamabad">Islamabad</option>
            <option value="Lahore">Lahore</option>
            @elseif($edited_education->Location=="Lahore")
            <option value="Islamabad">Islamabad</option>
            <option value="Lahore" selected="selected">Lahore</option>
            <option value="Karachi">Karachi</option>
            @endif
          <?php 
          }
          else{
            ?>
            <option value="Islamabad">Islamabad</option>
            <option value="Karachi" >Karachi</option>
            <option value="Lahore" selected="selected">Lahore</option>
          <?php 
          } 
          ?>
      </select>
      <p id="error_field_of_study" style="font-style: italic; color: red;"></p>
      <?php if($edited_education){ ?>
        <input type="hidden" name="update_id" id="update_id" value="{{$edited_education->id}}">
      <?php } ?>
    </td>
  </tr>
  <tr>
    <td>
      Institute:
    </td>
  </tr>
  <tr>
    <td>
      <input type="text" name="Institute" id="Institute"  style="width: 350px; height: 50px;" value="<?php if($edited_education){
              echo $edited_education->Institute;
          }?>" required="">
          <p id="error_institute" style="font-style: italic; color: red;"></p>
    </td>
  </tr>
  <tr>
    <td>
      Description:
    </td>
  </tr>
  <tr>
    <td>
      <textarea id="Description" name="Description" style="width: 350px; height: 50px;"><?php if($edited_education){
              echo $edited_education->Description;
          }?></textarea>
    </td>
  </tr>
  <tr>
    <td>Completion Year</td>
  </tr>
  <tr>
   <td> <select   name="startYear" id="startYear" style="width: 350px; height: 50px;">
    <?php 
    if($edited_education){ 
    ?>
      <option value="">Select One</option>
      @if($edited_education->Completion_year=="2024")
      <option value=2024 selected="selected">2024</option>
      <option value=2023>2023</option>
      <option value=2022>2022</option>
      @elseif($edited_education->Completion_year=="2023")
      <option value=2024>2024</option>
      <option value=2023 selected="selected">2023</option>
      <option value=2022>2022</option>
      @elseif($edited_education->Completion_year=="2022")
      <option value=2024>2024</option>
      <option value=2023>2023</option>
      <option value=2022 selected="selected">2022</option>
      @endif
    <?php 
    }
    else{
    ?>
      <option value="">Select One</option>
      <option  value=2024>2024</option>
      <option  value=2023>2023</option>
      <option  value=2022>2022</option>
    <?php 
    } 
    ?>
  </select>
</td>
</tr>
<tr>
 <td>
  <?php 
    if(!$edited_education){ 
  ?>
   <button class="btn_st" id="btn_save_education" onclick="save_education()">Save</button>
  <?php
    }else{
  ?>
    <button class="btn_st" id="btn_update_education" onclick="update_education()">Update</button>
  <?php
    }
  ?>
   <button class="btn_st" id="btn_cancel_education" onclick="cancel_edu_btn()">Cancel</button>
 </td>
</tr>
</table>
</div>
</div>  