<?php
function reloadDelivery($delivery){
echo "<div class='boxfull-new'>";
			$blocknumb = 0;
				foreach ($delivery as $image => $value) {


				 // if ($value["series"] != "" ) {
					//  $seriearr = explode(",", $value["series"]);
					// foreach ($series as $skey => $svalue) {
					// 	if(in_array($svalue["uid"], $seriearr)){
					// 		$sname =  $svalue["name"];
					// 	}
         //
					// }
         //
         //
				 // }
				 // else {
				 // 	$sname = '';
				 // }
					// //




					if ($value['block'] == 1) {



						echo "<div class='mute runnames blocknumb'>
						<div><span class='searchasset'><img src=".$value['image']."></span><br><span class='small'>".''."</span></div>
							<div><span class='searchasset'>".$value['name']."</span><br><span class='small'>".''."</span></div>
							<div><form><input type='hidden' name='rowid' value='".$value["uid"]."'/>
							<span class='action-buts edit-but runs-edit' onclick=\"editDropdown()\" data-key=\"edit-run\" data-value=\"".$value["uid"]."\"><ion-icon name='create'></ion-icon> Edit</span>
							<span class ='action-buts' id='unblockbut".$blocknumb."' onclick='unblockDelivery(this.id, \"delivery-table\")'><ion-icon name='eye'></ion-icon> Unblock</span>
							<div class='delete-but'>
							<div class='delete-menu'>
							<span class ='action-buts' id='deletebut".$blocknumb."' onclick='deleteEws(this.id, \"ews-table\")'><ion-icon name='close-circle'></ion-icon> Delete permanently</span>
							</div>
							</div>
							</form>
							</div>
							</div>";
					}else{

						echo "<div class='runnames blocknumb'>


							<div><span class='searchasset'><img src=".$value['image']."></span><br><span class='small'>".''."</span></div>
							<div><span class='searchasset'>".$value['name']."</span><br><span class='small'>".''."</span></div>
							<div><form><input type='hidden' name='rowid' value='".$value["uid"]."'/>
							<span class='action-buts edit-but runs-edit' onclick='editDropdown()' data-key='edit-run' data-value='".$value["uid"]."'><ion-icon name='create'></ion-icon> Edit</span>
							<span class ='action-buts' id='blockbut".$blocknumb."' onclick='blockDelivery(this.id, \"delivery-table\")'><ion-icon name='eye-off'></ion-icon> Block</span>
							<div class='delete-but'>
							<div class='delete-menu'>
							<span class ='action-buts' id='deletebut".$blocknumb."' onclick='deleteEws(this.id, \"ews-table\")'><ion-icon name='close-circle'></ion-icon> Delete permanently</span></form>
							</div>
							</div>
							</form>
							</div>
							</div>";
					}
					$blocknumb++;
				}
			echo "</div>";
		}
			?>
