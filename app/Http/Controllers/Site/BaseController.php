<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 12/19/2016
 * Time: 6:22 PM
 */

namespace App\Http\Controllers\Site;


use Wa;
use Webarq\Http\Controllers\Webarq;
use Webarq\Manager\Site\MenuManager;
use App\Webarq\Model\FooterModel;
use DB;

class BaseController extends Webarq
{
    protected $layout = 'base';

    /**
     * @var object Webarq\Manager\Site\MenuManager
     */
    protected $menu;

    /**
     * @param array $params
     */
    public function __construct(array $params = [])
    {

        $this->themes = config('webarq.system.site.themes', 'front-end');

        view()->share('shareThemes', $this->themes);

        parent::__construct($params);

        $this->menu = $this->bindMenu(array_pull($params, 'menu'));
    }

    protected function bindMenu(MenuManager $menu = null)
    {
        return $menu;
    }

    /**
     * Escaping function. This method execute through routing file
     *
     * @return mixed
     */
    public function escape()
    {
        if (!$this->menu instanceof MenuManager || null === $this->menu->getActive()) {
            return $this->actionGetForbidden();
        } elseif ('0' === Wa::config('system.site.online')) {
            return Wa::getThemesView('front-end', 'layout.offline');
        }

// Auto template is on
        //dd($this->menu->getActive()->template);
        if (true === config('webarq.system.site.auto-template')) {
            if ([] !== $this->menu->getActive() &&
                    view()->exists('webarq::themes.front-end.layout.' . $this->menu->getActive()->template)
            ) {
                $this->setLayout($this->menu->getActive()->template);
            }
        }
    }

    /**
     * @param string $name Layout name (no need to write down the full path)
     * @param array $attributes
     * @return mixed
     */
    protected function setLayout($name, array $attributes = [])
    {
        parent::setLayout($name);
        //dd(Wa::config('system.site.meta.title'));
// Default layout meta
        $this->layout->with($attributes + [
                'metaTitle' => Wa::config('system.site.meta.title','Home'),
                'metaDescription' => Wa::config('system.site.meta.description')
        ]);
    }

    /**
     * Basic index action
     */
    public function actionGetIndex()
    {
        $footer = FooterModel::selectTranslate('txt1','txt2')->addSelect('image')->get();
        view()->share(['footer'=>$footer]);
        $this->layout->{'shareSections'} = $this->listSectionManager();
    }


    /**
     * @return array
     */
    protected function listSectionManager()
    {
        $managers = [];

        if ([] !== ($sections = $this->getActiveSection())) {
            foreach ($sections as $section) {
                $key = array_get($section, 'key', 'Unknown');
// Overwrite section id
                $section['id'] = $this->menu->getActive()->id . '.' . $section['id'];

                $option = config('webarq.template.sections.' . $key, [])
                        + ['template' => $this->menu->getActive()->template];

                $managers[] = Wa::manager('site.section', $section + $option);
            }
        }

        return $managers;
    }

    /**
     * @return array|mixed
     */
    protected function getActiveSection()
    {
        return [] === $this->menu->getActive()
                ? $this->menu->getActive()
                : Wa::model('section')->getTemplateSection($this->menu->getActive()->template);
    }

    /**
     * After method
     *
     * Calling from route file as final step if main method does not return anything
     *
     * @return object
     */
    public function after()
    {
        if (!empty($this->menu->getActive())) {
// Overwrite meta title n description with active menu meta
            $this->layout->with([
                    'metaTitle' => $this->menu->getActive()->meta_title,
                    'metaDescription' => $this->menu->getActive()->meta_description
            ]);
        }

        return parent::after();
    }
}