<?php 

/**
 * Metabox UI
 */

?>

<div class="metabox" ng-controller="cmfMetaBox">
  <ul ng-init='initialize(<?php echo json_encode( !empty( $_ = $return ) ? $_ : array() ) ?>, <?php echo json_encode( !empty( $__ = $metabox['args'] ) ? $__ : array() ) ?>)'>
    
    <li class="fieldset" ng-repeat="fieldset in fieldsets">

      <!-- The list of fields for this metabox -->
      <ul>

        <!-- Field Item. Loads input templates -->
        <li class="field" ng-repeat="field in fieldset.options" ng-include="templates_url + 'form/' + field.input + '.php'"></li>

      </ul>
      
      <!-- Delete button -->
      <div class="button button-primary" ng-click="removeFieldSet(fieldsets, $index)"><?php _e( 'Delete', WP_CMF_DOMAIN ); ?></div>

    </li>
    

  </ul>

  <!-- Add New button -->
  <div class="button button-primary right" ng-click="addFieldSet(fieldsets)"><?php _e( 'Add New', WP_CMF_DOMAIN ); ?></div>
  
  <div class="clear"></div>
  
</div>

