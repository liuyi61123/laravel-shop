<?php

namespace App\Admin\Controllers;

use App\Models\CouponCode;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CouponCodesController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('优惠券列表')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CouponCode);

        $grid->id('Id');
        $grid->name('Name');
        $grid->code('Code');
        $grid->type('Type');
        $grid->value('Value');
        $grid->total('Total');
        $grid->used('Used');
        $grid->min_amount('Min amount');
        $grid->not_before('Not before');
        $grid->not_after('Not after');
        $grid->enabled('Enabled');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(CouponCode::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->code('Code');
        $show->type('Type');
        $show->value('Value');
        $show->total('Total');
        $show->used('Used');
        $show->min_amount('Min amount');
        $show->not_before('Not before');
        $show->not_after('Not after');
        $show->enabled('Enabled');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CouponCode);

        $form->text('name', 'Name');
        $form->text('code', 'Code');
        $form->text('type', 'Type');
        $form->decimal('value', 'Value');
        $form->number('total', 'Total');
        $form->number('used', 'Used');
        $form->decimal('min_amount', 'Min amount');
        $form->datetime('not_before', 'Not before')->default(date('Y-m-d H:i:s'));
        $form->datetime('not_after', 'Not after')->default(date('Y-m-d H:i:s'));
        $form->switch('enabled', 'Enabled');

        return $form;
    }
}
