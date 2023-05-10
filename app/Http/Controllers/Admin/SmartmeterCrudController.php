<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SmartmeterRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SmartmeterCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SmartmeterCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Smartmeter::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/smartmeter');
        CRUD::setEntityNameStrings('smartmeter', 'smartmeters');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('unique_identifier');
        CRUD::column('product_name');
        CRUD::column('service_name');
        CRUD::column('service_description');
        CRUD::column('service_category');
        CRUD::column('relationship');
        CRUD::column('service_status');
        CRUD::column('business_process');
        CRUD::column('serviceowner');
        CRUD::column('business_owner');
        CRUD::column('priority');
        CRUD::column('sla');
        CRUD::column('contact_no');
        CRUD::column('address');
        CRUD::column('email');

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
        CRUD::setValidation(SmartmeterRequest::class);

        CRUD::field('unique_identifier');
        CRUD::field('product_name');
        CRUD::field('service_name');
        CRUD::field('service_description');
        CRUD::field('service_category');
        CRUD::field('relationship');
        CRUD::field('service_status');
        CRUD::field('business_process');
        CRUD::field('serviceowner');
        CRUD::field('business_owner');
        CRUD::field('priority');
        CRUD::field('sla');
        CRUD::field('contact_no');
        CRUD::field('address');
        CRUD::field('email');

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
