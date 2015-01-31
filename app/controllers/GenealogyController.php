<?php

class GenealogyController extends BaseController {

    public function index($id=22) {
        
        $node = Genealogy::find($id)->DescendantsAndSelf()->limitDepth(1)->remember(10)->get();
        return  View::make('genealogy/index')->with('node', $node);
        
    }
    
    public function statis() {
        
        $data['count'] = Genealogy::count();
        $data['countl'] = Genealogy::find(24)->DescendantsAndSelf()->count();
        $data['countr'] = Genealogy::find(25)->DescendantsAndSelf()->count();
        $data['countc'] = Genealogy::find(28)->DescendantsAndSelf()->count();
        return View::make('genealogy/statis')->with('data',$data);
    }

    public function view($id) {

        $node = Genealogy::find($id);
        return View::make('genealogy/view')->with('node', $node);
    }

    public function add($id) {

        return View::make('genealogy/add')->with('id', $id);
    }

    public function store() {
        $id = Input::get('id');
        $name = Input::get('name');
        $pos = Input::get('pos');

        $root = Genealogy::find($id);

        switch ($pos) {
            case 'first':
                $node = Genealogy::create(['name' => $name]);
                $node->makeFirstChildOf($root);                
                break;
            case 'last':
                $node = Genealogy::create(['name' => $name]);
                $node->makeLastChildOf($root); 
                break;
            default:
                $node = Genealogy::create(['name' => $name]);
                $node->makeLastChildOf($root); 
        }

        return Redirect::to('/genealogy');
    }

    public function addOf() {

        return View::make('genealogy/addOf');
    }

    public function storeOf() {

        $id = Input::get('id');
        $name = Input::get('name');

        $root = Genealogy::find($id);
        $root->children()->create(['name' => $name]);

        return Redirect::to('genealogy/' . $id);
    }

    public function edit($id) {

        $node = Genealogy::find($id);
        return View::make("genealogy/edit")->with('node', $node);
    }

    public function update($id) {

        return Genealogy::update(Input::all());
    }

    public function move($id) {

        return View::make('genealogy/move')->with('id',$id);
    }

    public function moveUp() {

        $id = Input::get('id');
        $pos = Input::get('pos');
        $root = Genealogy::find($id);

        switch ($pos) {
            case 'left':
                $root->moveLeft();
                break;
            case 'right':
                $root->moveRight();
                break;
            default:
                $root->moveLeft();
        }
        return Redirect::to('/genealogy');
    }

    public function moveOf() {

        return View::make('genealogy/moveOf');
    }

    public function moveOf_up() {

        $id = Input::get('id');
        $pos = Input::get('post');
        $root = Genealogy::find(1);

        switch ($pos) {
            case leftOf:
                $root->moveToLeftOf($node);
                break;
            case right:
                $root->moveToRightOf($node);
                break;
            default:
                $root->moveLeft();
        }
    }

    public function del($id) {

        return View::make('genealogy/del')->with('id', $id);
    }

    public function delete() {

        $id = Input::get('id');
        $node = Genealogy::find($id);
        $node->delete();

        return Redirect::to('/genealogy');
    }

}
