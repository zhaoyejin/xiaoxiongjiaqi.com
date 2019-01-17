<?php

namespace App\Admin\Controllers;

use App\Model\Admin\Websites;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class WebsitesController extends Controller
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
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
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
     * @param mixed $id
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
        $grid = new Grid(new Websites);

        $grid->id('序号');
        $grid->webname('网址名称');
        $grid->title('网址标题');
        $grid->description('网站描述');
        $grid->keywords('关键词');
        $grid->email('邮箱');
        $grid->address('地址');
        $grid->tel('电话');
        $grid->phone('手机');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Websites::findOrFail($id));

        $show->id('Id');
        $show->webname('Webname');
        $show->title('Title');
        $show->description('Description');
        $show->keywords('Keywords');
        $show->email('Email');
        $show->address('Address');
        $show->tel('Tel');
        $show->phone('Phone');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Websites);

        $form->text('webname', '网站名称');
        $form->text('title', '网站标题');
        $form->text('description', '网站描述');
        $form->text('keywords', '关键词');
        $form->email('email', '联系人邮箱');
        $form->text('address', '公司地址');
        $form->text('tel', '公司电话');
        $form->text('phone', '联系人手机');

        return $form;
    }
}
