<?php
/**
 * cpgAlbumFactory
 *
 * @package
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgAlbumFactory {
    /**
     * Factory method to return album object.
     */
    /**
     * cpgAlbumFactory::getAlbumObj()
     *
     * @param  $album
     * @return
     */
    function getAlbumObj($album)
    {
        global $lang_errors;
        /**
         * If the album is numeric, return the object of cpgAlbumData
         */
        if (is_numeric($album)) {
            // echo "HERE: ";
            require('cpgNumericAlbumData.class.php');
            return new cpgNumericAlbumData;
        } else {
            switch ($album) {
                case 'lastup':
                    require('cpgLastUploadAlbumData.class.php');
                    return new cpgLastUploadAlbumData;
                    break;
                case 'lastcom':
                    require('cpgLastCommentAlbumData.class.php');
                    return new cpgLastCommentAlbumData;
                    break;
                case 'random':
                    require('cpgRandomAlbumData.class.php');
                    return new cpgRandomAlbumData;
                    break;
                case 'topn':
                    require('cpgMostViewedAlbumData.class.php');
                    return new cpgMostViewedAlbumData;
                    break;
                case 'toprated':
                    require('cpgTopRatedAlbumData.class.php');
                    return new cpgTopRatedAlbumData;
                    break;
                case 'favpics':
                    require('cpgMyFavoriteAlbumData.class.php');
                    return new cpgMyFavoriteAlbumData;
                    break;
                case 'lastupby':
                    require('cpgLastUploadsByAlbumData.class.php');
                    return new cpgLastUploadsByAlbumData;
                    break;
                case 'lastcomby':
                    require('cpgLastCommentsByAlbumData.class.php');
                    return new cpgLastCommentsByAlbumData;
                    break;
                case 'search':
                    require('cpgSearchAlbumData.class.php');
                    return new cpgSearchAlbumData;
                    break;
                default:
                    /**
                     * Invalid album type. Die!!!
                     */
                    cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_ap']);
            }
        }
    }
}

?>
