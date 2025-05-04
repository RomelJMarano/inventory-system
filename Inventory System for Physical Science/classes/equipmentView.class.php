<?php

class EquipmentView extends Equipment {

    public function showEquipmemtCards() {
        $equipments = $this->getEquipments();

        if(isset($equipments) && !empty($equipments)) {
            echo '<div class="item__cards-container">';
            foreach($equipments as $equipment) {
                echo '
                    <div class="item__card">
                        <div class="img__container">
                            <img src="../assets/uploads/'. htmlspecialchars($equipment['equipment_file_name']) .'" alt="Product Image" />
                        </div>  
                        <div class="card__body">
                            <h4>' . htmlspecialchars($equipment['equipment_name']) . '</h4>
                            <small>Glass or plastic tubes</small>
                            <button class="add-to-bag-btn" 
                                data-id="' . $equipment['equipment_id'] . '"
                                data-name="' . htmlspecialchars($equipment['equipment_name']) . '"
                                data-img="../assets/uploads/'. htmlspecialchars($equipment['equipment_file_name']) . '"
                            >
                                Borrow
                            </button>
                        </div>  
                    </div>
                ';
            }
            echo '</div>';
        } else {
            echo '
            <div class="no_equipments_yet"> 
              <div class="image-container">
                <img src="../assets/images/empty.png" class="" alt="">
              </div>
              <p class="no-equipments-text">No equipment available yet. Please check back later or add new items.</p>
            </div>
          ';
        }
    }
}
?>
