<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use DB;
use Validator;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;


class CommonCodeController extends Controller
{

    /**
     * Show the artist page
     */
    public static function getStagesForApplication($app_name)
    {
        $sql = sprintf("SELECT    s.id as value,
                                  s.name as name
                        FROM      stage s,
                                  stages_app sa,
                                  common_code c
                        WHERE     s.id = sa.stage_id
                        AND       c.code_no = sa.code_no
                        AND       c.code_type = 'application_type'
                        AND       c.code_name = '%s'
                        ORDER BY  s.name",
                        $app_name);

        $stages = DB::select($sql);
        return $stages;
    }

    public static function getApplicationStatusList()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'application_status'
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    public static function getWorkForTicketStatusList()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'work_for_ticket_status'
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    /**
     * for Music Application
     */
    public static function getMusicStyle()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'music_style'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    public static function getArtistType()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'artist_type'
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    public static function getFromWhere()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'from_where'
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    public static function getMusicSetup()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'music_setup_type'
                        ORDER BY  c.code_no";

        $setup_list = DB::select($sql);
        return $setup_list;
    }

    /**
     * for Work for Ticket Application
     */
    public static function getWorkForTicketPrimaryTask()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'work_for_ticket_primary_task'
                        ORDER BY  c.code_no";

        $primary_task_list = DB::select($sql);
        return $primary_task_list;
    }

    public static function getWorkForTicketSecondaryTask()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'work_for_ticket_seconday_task'
                        ORDER BY  c.code_no";

        $secondary_task_list = DB::select($sql);
        return $secondary_task_list;
    }

    public static function getWorkForTicketAdditionalTask()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'work_for_ticket_additional_task'
                        ORDER BY  c.code_no";

        $additional_task_list = DB::select($sql);
        return $additional_task_list;
    }

    public static function getWorkForTicketTimeframe()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'work_for_ticket_timeframe'
                        ORDER BY  c.code_no";

        $timeframe_list = DB::select($sql);
        return $timeframe_list;
    }

    public static function getWorkForTicketExperience()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'work_for_ticket_experience'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $experience_list = DB::select($sql);
        return $experience_list;
    }

    /**
     * for Arts Grant Application
     */
    public static function getArtsGrantType()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'arts_grant_grant'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    /**
     * for Performers Application
     */
    public static function getPerformanceStyle()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'performance_style'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    /**
     * for Workshop Application
     */
    public static function getWorkshopStyle()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'workshop_style'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    /**
     * for Kids Space Application
     */
    public static function getKidsSpaceStyle()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'kids_space_style'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    /**
     * for Kids Space Application
     */
    public static function getVJMultimediaStyle()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'vj_multimedia_style'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    public static function getAdditionalTransport()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'additional_transport'
                        ORDER BY  c.code_no";

        $transport_list = DB::select($sql);
        return $transport_list;
    }

    /**
     * for Decor Installation Application
     */
    public static function getDecorInstallationStyle()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'decor_installation_style'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    /**
     * for Evolve Gallery Application
     */
    public static function getEvolveGalleryApplyingTo()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'evolve_gallery_applying_to'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    /**
     * for Decor Installation Application
     */
    public static function getMassageStyle()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'massage_style'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    /**
     * for Market Bazaar Application
     */
    public static function getMarketBazaarStallSize()
    {
        $sql =         "SELECT    c.code_no as value,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type = 'market_bazaar_stall_size'
                        AND       c.code_no > 0
                        ORDER BY  c.code_no";

        $list = DB::select($sql);
        return $list;
    }

    /**
     * for Bazaar Map
     */
    public static function getBazaarMapImages()
    {
        $sql =         "SELECT    c.code_type as type,
                                  c.code_name as name
                        FROM      common_code c
                        WHERE     c.code_type LIKE 'bazaar_map%'
                        ORDER BY  c.code_no";

        $list = DB::select($sql);

        return [
            'map_image'         => $list[0]->name,
            'map_image_link'    => asset('public/uploads') . '/' . $list[0]->name,
            'marker_image'      => $list[1]->name,
            'marker_image_link' => asset('public/uploads') . '/' . $list[1]->name
        ];
    }

    public static function setBazaarMapImage($type, $name)
    {
        $sql =         sprintf(
                        "UPDATE    common_code c
                        SET       c.code_name = '%s'
                        WHERE     c.code_type = '%s'",
                        $name, $type);

        $list = DB::statement($sql);
    }

    /**
     * for User Permission
     */
     public static function getDepartments()
     {
         $sql =         "SELECT    c.code_no as value,
                                   c.code_name as name
                         FROM      common_code c
                         WHERE     c.code_type = 'department_name'
                         ORDER BY  c.code_no";

         $list = DB::select($sql);
         return $list;
     }

      public static function getRolsList()
      {
          $sql =         "SELECT r.id, r.name, r.order
                          FROM role r
                          ORDER BY r.order";

          $list = DB::select($sql);
          return $list;
      }

      public static function hasRole($page_role)
      {
          if (Auth::user()->status == "0") {
              return false;
          }

          $roles = User::find(Auth::user()->id)->roles;

          if (count($roles) == 0) {
              return false;
          }

          foreach ($roles as $role) {
              if ($page_role == 9999) { // for Super Administrator
                  if ($role->role_id == 1){
                      return true;
                  }
              }
              else{
                  if (($role->role_id == 1) || ($role->role_id == 2) || ($role->role_id == $page_role)) {
                      return true;
                  }
              }
          }

          return false;
      }

      public static function getCountries($app_country){
          $countries = config('global.countries');
          $ret = "";
          if(!empty($app_country)){
              $country_codes = explode('|', $app_country);
              $country = "";
              foreach ($country_codes as $code) {
                  $country = $country . $countries[$code] . ", ";
              }
              $country = substr($country, 0, -2);
              $ret = $country;
          }

          return $ret;
      }
}

?>
