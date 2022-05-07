<?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class Address_model extends Model {
        
        /* start change jcd april 24,2022 */

        public function insert_address($region, $province, $city, $barangay, $street, $house, $village, $zipcode)
        {
           $address = array(
                'region' => $region,
                'province' => $province,
                'municipality_city' => $city,
                'barangay' => $barangay,
                'street_sitio' => $street,
                'house_block_lotno' => $house,
                'subdivision_village' => $village,
                'zipcode' => $zipcode
           );
           return $this->db->table('address')->insert($address);
        }

        
        public function select_birth_add($street)
        {
            return $this->db->table('address')->where('street_sitio', $street)->get();
        }

        public function select_residential_add($street)
        {
            return $this->db->table('address')->where('street_sitio', $street)->get();
        }
        
        public function select_permanent_add($street)
        {
            return $this->db->table('address')->where('street_sitio', $street)->get();
        }

        /* end change jcd april 24,2022 */


        /* start change jcd May 4, 2022 */
        public function birth_add($id)
        {
            return $this->db->table('user_profile')->select('address.address_id, address.region, address.province, address.municipality_city, address.barangay, address.street_sitio,address.house_block_lotno, address.subdivision_village, address.zipcode')->inner_join('address', 'address.address_id = user_profile.birth_place_address_id')->where('user_id', $id)->get();
        }
        public function permanent_add($id)
        {
            return $this->db->table('user_profile')->select('address.address_id, address.region, address.province, address.municipality_city, address.barangay, address.street_sitio, address.house_block_lotno, address.subdivision_village, address.zipcode')->inner_join('address', 'address.address_id = user_profile.permanent_address_id')->where('user_id', $id)->get();
        }
        public function residential_add($id)
        {
            return $this->db->table('user_profile')->select('address.address_id, address.region, address.province, address.municipality_city, address.barangay, address.street_sitio, address.house_block_lotno, address.subdivision_village, address.zipcode')->inner_join('address', 'address.address_id = user_profile.residential_address_id')->where('user_id', $id)->get();
        }

        /* end change jcd May 4, 2022 */

    }
?>