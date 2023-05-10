<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MeterrequestRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MeterrequestCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MeterrequestCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Meterrequest::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/meterrequest');
        CRUD::setEntityNameStrings('meterrequest', 'meterrequests');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('address_Post_Office');
        CRUD::column('buildingpermit_copy');
        CRUD::column('created_at');
        CRUD::column('email');
        CRUD::column('energycommission_copy');
        CRUD::column('first_name');
        CRUD::column('ghana_post_gps');
        CRUD::column('ghanacard_copy');
        CRUD::column('last_name');
        CRUD::column('meter_type');
        CRUD::column('national_id');
        CRUD::column('other_name');
        CRUD::column('phone_number_one');
        CRUD::column('phone_number_two');
        CRUD::column('residential_address');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MeterrequestRequest::class);

        CRUD::field('address_Post_Office');
        CRUD::field('buildingpermit_copy');
        CRUD::field('email');
        CRUD::field('energycommission_copy');
        CRUD::field('first_name');
        CRUD::field('ghana_post_gps');
        CRUD::field('ghanacard_copy');
        CRUD::field('last_name');
        CRUD::field('meter_type');
        CRUD::field('national_id');
        CRUD::field('other_name');
        CRUD::field('phone_number_one');
        CRUD::field('phone_number_two');
        CRUD::field('residential_address');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
