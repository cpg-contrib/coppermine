<?php
class cpgAlbumFactory {
  /**
   * Factory method to return album object.
   */
  function getAlbumObj($album)
  {
    global $lang_errors;
    /**
     * If the album is numeric, return the object of cpgAlbumData
     */
    if (is_numeric($album)) {
      
      require('cpgNumericAlbumData.class.php');

      return new cpgNumericAlbumData;
    } else {
      /**
       * Invalid album type. Die!!!
       */
      cpg_die(ERROR, $lang_errors['non_exist_ap']);
    }
  }
}
?>
