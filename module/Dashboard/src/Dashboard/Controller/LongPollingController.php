<?php
/**
 * Long polling server for widget's data updates
 *
 * @author Konrad Turczynski <konrad.turczynski@schibsted.pl>
 */
namespace Dashboard\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class LongPollingController extends AbstractRestfulController {
    /**
     * Create a new resource
     *
     * @param  mixed $data
     * @return mixed
     */
    public function create($data) {
        // TODO: Implement create() method.
    }

    /**
     * Delete an existing resource
     *
     * @param  mixed $id
     * @return mixed
     */
    public function delete($id) {
        // TODO: Implement delete() method.
    }

    /**
     * Return current data for widgets
     *
     * @param  string $id wdiget's id
     * @return \Zend\View\Model\JsonModel
     */
    public function get($id) {

        return new JsonModel(array('data' => $id));

    }

    /**
     * Return list of resources
     *
     * @return mixed
     */
    public function getList() {
        // TODO: Implement getList() method.
    }

    /**
     * Update an existing resource
     *
     * @param  mixed $id Resource id
     * @param  mixed $data Resource data
     * @return mixed
     */
    public function update($id, $data) {
        // TODO: Implement update() method.
    }
}