<?php
class template_InfoModifyMain_fluid_html_9811fd15852cce28 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        
return 'Module';
    }
    public function hasLayout(): bool {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * section Before
 */
public function section_ed3696630fa71e53(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'identifier' => '@typo3/backend/context-menu.js',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'identifier' => '@typo3/backend/element/immediate-action-element.js',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'identifier' => '@typo3/tstemplate/information-module.js',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\ModuleViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$array9 = [
'0' => 'web',
'1' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments7 = [
'name' => 'args',
'value' => $array9,
];
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8)]);

$output0 .= '
    <typo3-immediate-action
        action="TYPO3.Backend.Storage.ModuleStateStorage.update"
        args="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('args');
};

$arguments12 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure13 = ($arguments12['value'] !== null) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13;return $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\JsonViewHelper::class, $arguments12, $renderingContext, $renderChildrenClosure13);
};

$arguments10 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper::class, $arguments10, $renderingContext, $renderChildrenClosure11);

$output0 .= '"
    ></typo3-immediate-action>
';

    return $output0;
}
/**
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output14 = '';

$output14 .= '

    <h1>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.title'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments24 = [
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.title'),
];

$arguments16 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:submodule.titleWithRecord',
'arguments' => $array18,
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17)]);

$output15 .= '
            ';
return $output15;
},
'__else' => function() use ($renderingContext) {
$output19 = '';

$output19 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:submodule.title',
];

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments20, $renderingContext, $renderChildrenClosure21)]);

$output19 .= '
            ';
return $output19;
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments24, $renderingContext)
;

$output14 .= '
    </h1>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:submodule.description',
];

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments25, $renderingContext, $renderChildrenClosure26)]);

$output14 .= '</p>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('allTemplatesOnPage'),
];
$renderChildrenClosure29 = ($arguments28['subject'] !== null) ? function() use ($arguments28) { return $arguments28['subject']; } : $renderChildrenClosure29;
$array27 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments28, $renderingContext, $renderChildrenClosure29),
'1' => ' > 1',
];

$expression30 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments51 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output31 = '';

$output31 .= '
        <div class="form-row">
            <div class="form-group">
                <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$array34 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments32 = [
'referenceType' => 'absolute',
'route' => 'web_typoscript_infomodify',
'parameters' => $array34,
];

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33)]);

$output31 .= '" method="post">
                    <label class="form-label" for="selectedTemplate">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:options.selectedRecord',
];

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments35, $renderingContext, $renderChildrenClosure36)]);

$output31 .= '
                    </label>
                    <select
                        name="selectedTemplate"
                        id="selectedTemplate"
                        class="form-select"
                        data-global-event="change"
                        data-action-navigate="$data=~s/$value/"
                        data-action-submit="$form"
                    >
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                            <option
                                value="';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.uid')]);

$output39 .= '"
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array40 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.uid'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('template.uid'),
];

$expression41 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments42 = [
'__then' => function() use ($renderingContext) {

return 'selected="selected"';
},
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression41(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)),
    $renderingContext
),
];

$output39 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments42, $renderingContext)
;

$output39 .= '
                            >
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array43 = [
'0' => $renderingContext->getVariableProvider()->getByPath('template.type'),
'1' => ' == \'sys_template\'',
];

$expression44 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'sys_template');};

$arguments46 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression44(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output45 = '';

$output45 .= '
                                ';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.title')]);

$output45 .= '
                            ';
return $output45;
},
];

$output39 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments46, $renderingContext)
;

$output39 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array47 = [
'0' => $renderingContext->getVariableProvider()->getByPath('template.type'),
'1' => ' == \'site\'',
];

$expression48 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'site');};

$arguments50 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression48(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                                ';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('template.site.configuration.websiteTitle')]);

$output49 .= '
                            ';
return $output49;
},
];

$output39 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments50, $renderingContext)
;

$output39 .= '
                            </option>
                        ';
return $output39;
};

$arguments37 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('allTemplatesOnPage'),
'as' => 'template',
];

$output31 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments37, $renderingContext, $renderChildrenClosure38);

$output31 .= '
                    </select>
                </form>
            </div>
        </div>
    ';
return $output31;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments51, $renderingContext)
;

$output14 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array52 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'site\'',
];

$expression53 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'site');};

$arguments82 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression53(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output54 = '';

$output54 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
$output61 = '';

$output61 .= '
            <p>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
return NULL;
};

$array64 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.site.identifier'),
];

$arguments62 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:infoTypoScriptRecordFromSite.message',
'arguments' => $array64,
];

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments62, $renderingContext, $renderChildrenClosure63)]);

$output61 .= '
            </p>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$array69 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments67 = [
'referenceType' => 'absolute',
'route' => 'web_typoscript_infomodify',
'parameters' => $array69,
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::class, $arguments67, $renderingContext, $renderChildrenClosure68);
};

$arguments65 = [
'value' => NULL,
'name' => 'returnUrl',
];
$renderChildrenClosure66 = ($arguments65['value'] !== null) ? function() use ($arguments65) { return $arguments65['value']; } : $renderChildrenClosure66;
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments65, $renderingContext, $renderChildrenClosure66)]);

$output61 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
$output73 = '';

$output73 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};

$arguments74 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:btn.editSiteConfiguration',
];

$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments74, $renderingContext, $renderChildrenClosure75)]);

$output73 .= '
            ';
return $output73;
};

$array72 = [
'site' => $renderingContext->getVariableProvider()->getByPath('templateRecord.site.identifier'),
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$arguments70 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'referenceType' => 'absolute',
'route' => 'site_configuration.edit',
'parameters' => $array72,
'class' => 'btn btn-default',
];

$output61 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::class, $arguments70, $renderingContext, $renderChildrenClosure71);

$output61 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
$output79 = '';

$output79 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return NULL;
};

$arguments80 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:btn.editSiteSettings',
];

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments80, $renderingContext, $renderChildrenClosure81)]);

$output79 .= '
            ';
return $output79;
};

$array78 = [
'site' => $renderingContext->getVariableProvider()->getByPath('templateRecord.site.identifier'),
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$arguments76 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'referenceType' => 'absolute',
'route' => 'site_configuration.editSettings',
'parameters' => $array78,
'class' => 'btn btn-default',
];

$output61 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::class, $arguments76, $renderingContext, $renderChildrenClosure77);

$output61 .= '
        ';
return $output61;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'name' => 'TYPO3\\CMS\\Core\\Type\\ContextualFeedbackSeverity::INFO',
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:infoTypoScriptRecordFromSite.title',
];

$arguments55 = [
'message' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments57, $renderingContext, $renderChildrenClosure58),
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments59, $renderingContext, $renderChildrenClosure60),
];
$renderChildrenClosure56 = ($arguments55['message'] !== null) ? function() use ($arguments55) { return $arguments55['message']; } : $renderChildrenClosure56;
$output54 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments55, $renderingContext, $renderChildrenClosure56);

$output54 .= '
    ';
return $output54;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments82, $renderingContext)
;

$output14 .= '

    <div class="table-fit">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <td class="text-nowrap">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array83 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'sys_template\'',
];

$expression84 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'sys_template');};

$arguments93 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression84(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output85 = '';

$output85 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
$output88 = '';

$output88 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};

$arguments89 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-open',
];

$output88 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments89, $renderingContext, $renderChildrenClosure90);

$output88 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return NULL;
};

$arguments91 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.title',
];

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments91, $renderingContext, $renderChildrenClosure92)]);

$output88 .= '
                        ';
return $output88;
};

$arguments86 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'module' => '',
'returnUrl' => '',
'table' => 'sys_template',
'uid' => $renderingContext->getVariableProvider()->getByPath('templateRecord.uid'),
'fields' => 'title',
'class' => 'btn d-block text-start btn-default',
];

$output85 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::class, $arguments86, $renderingContext, $renderChildrenClosure87);

$output85 .= '
                    ';
return $output85;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments93, $renderingContext)
;

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array94 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'site\'',
];

$expression95 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'site');};

$arguments99 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression95(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output96 = '';

$output96 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.title',
];

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments97, $renderingContext, $renderChildrenClosure98)]);

$output96 .= '
                    ';
return $output96;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments99, $renderingContext)
;

$output14 .= '
                </td>
                <td width="90%">';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('templateRecord.title')]);

$output14 .= '</td>
            </tr>
            <tr>
                <td class="text-nowrap">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array100 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'sys_template\'',
];

$expression101 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'sys_template');};

$arguments110 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression101(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output102 = '';

$output102 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
$output105 = '';

$output105 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
return NULL;
};

$arguments106 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-open',
];

$output105 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments106, $renderingContext, $renderChildrenClosure107);

$output105 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return NULL;
};

$arguments108 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.description',
];

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments108, $renderingContext, $renderChildrenClosure109)]);

$output105 .= '
                        ';
return $output105;
};

$arguments103 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'module' => '',
'returnUrl' => '',
'table' => 'sys_template',
'uid' => $renderingContext->getVariableProvider()->getByPath('templateRecord.uid'),
'fields' => 'description',
'class' => 'btn d-block text-start btn-default',
];

$output102 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::class, $arguments103, $renderingContext, $renderChildrenClosure104);

$output102 .= '
                    ';
return $output102;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments110, $renderingContext)
;

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array111 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'site\'',
];

$expression112 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'site');};

$arguments116 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression112(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output113 = '';

$output113 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
return NULL;
};

$arguments114 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.description',
];

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments114, $renderingContext, $renderChildrenClosure115)]);

$output113 .= '
                    ';
return $output113;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments116, $renderingContext)
;

$output14 .= '
                </td>
                <td width="90%">';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('templateRecord.description')]);

$output14 .= '</td>
            </tr>
            <tr>
                <td class="text-nowrap">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array117 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'sys_template\'',
];

$expression118 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'sys_template');};

$arguments127 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression118(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output119 = '';

$output119 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure121 = function() use ($renderingContext) {
$output122 = '';

$output122 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
return NULL;
};

$arguments123 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-open',
];

$output122 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments123, $renderingContext, $renderChildrenClosure124);

$output122 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return NULL;
};

$arguments125 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.constants',
];

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments125, $renderingContext, $renderChildrenClosure126)]);

$output122 .= '
                        ';
return $output122;
};

$arguments120 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'module' => '',
'returnUrl' => '',
'table' => 'sys_template',
'uid' => $renderingContext->getVariableProvider()->getByPath('templateRecord.uid'),
'fields' => 'constants',
'class' => 'btn d-block text-start btn-default',
];

$output119 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::class, $arguments120, $renderingContext, $renderChildrenClosure121);

$output119 .= '
                    ';
return $output119;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments127, $renderingContext)
;

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array128 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'site\'',
];

$expression129 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'site');};

$arguments133 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression129(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output130 = '';

$output130 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
return NULL;
};

$arguments131 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.constants',
];

$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments131, $renderingContext, $renderChildrenClosure132)]);

$output130 .= '
                    ';
return $output130;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments133, $renderingContext)
;

$output14 .= '
                </td>
                <td width="90%">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext) {
return NULL;
};

$array136 = [
'0' => $renderingContext->getVariableProvider()->getByPath('numberOfConstantsLines'),
];

$arguments134 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.lines',
'arguments' => $array136,
];

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments134, $renderingContext, $renderChildrenClosure135)]);

$output14 .= '</td>
            </tr>
            <tr>
                <td class="text-nowrap">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array137 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'sys_template\'',
];

$expression138 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'sys_template');};

$arguments147 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression138(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output139 = '';

$output139 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure141 = function() use ($renderingContext) {
$output142 = '';

$output142 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure144 = function() use ($renderingContext) {
return NULL;
};

$arguments143 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-open',
];

$output142 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments143, $renderingContext, $renderChildrenClosure144);

$output142 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext) {
return NULL;
};

$arguments145 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.setup',
];

$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments145, $renderingContext, $renderChildrenClosure146)]);

$output142 .= '
                        ';
return $output142;
};

$arguments140 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'module' => '',
'returnUrl' => '',
'table' => 'sys_template',
'uid' => $renderingContext->getVariableProvider()->getByPath('templateRecord.uid'),
'fields' => 'config',
'class' => 'btn d-block text-start btn-default',
];

$output139 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::class, $arguments140, $renderingContext, $renderChildrenClosure141);

$output139 .= '
                    ';
return $output139;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments147, $renderingContext)
;

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array148 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'site\'',
];

$expression149 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'site');};

$arguments153 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression149(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output150 = '';

$output150 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext) {
return NULL;
};

$arguments151 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.setup',
];

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments151, $renderingContext, $renderChildrenClosure152)]);

$output150 .= '
                    ';
return $output150;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments153, $renderingContext)
;

$output14 .= '
                </td>
                <td width="90%">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext) {
return NULL;
};

$array156 = [
'0' => $renderingContext->getVariableProvider()->getByPath('numberOfSetupLines'),
];

$arguments154 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:table.column.lines',
'arguments' => $array156,
];

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments154, $renderingContext, $renderChildrenClosure155)]);

$output14 .= '</td>
            </tr>
            </tbody>
        </table>
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array157 = [
'0' => $renderingContext->getVariableProvider()->getByPath('templateRecord.type'),
'1' => ' == \'sys_template\'',
];

$expression158 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'sys_template');};

$arguments167 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression158(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output159 = '';

$output159 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure161 = function() use ($renderingContext) {
$output162 = '';

$output162 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure164 = function() use ($renderingContext) {
return NULL;
};

$arguments163 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-document-open',
];

$output162 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments163, $renderingContext, $renderChildrenClosure164);

$output162 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure166 = function() use ($renderingContext) {
return NULL;
};

$arguments165 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'domain' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_info.xlf:btn.editTypoScriptRecord',
];

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments165, $renderingContext, $renderChildrenClosure166)]);

$output162 .= '
        ';
return $output162;
};

$arguments160 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'fields' => NULL,
'module' => '',
'returnUrl' => '',
'table' => 'sys_template',
'uid' => $renderingContext->getVariableProvider()->getByPath('templateRecord.uid'),
'class' => 'btn btn-default',
];

$output159 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::class, $arguments160, $renderingContext, $renderChildrenClosure161);

$output159 .= '
    ';
return $output159;
},
];

$output14 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments167, $renderingContext)
;

$output14 .= '

';

    return $output14;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output168 = '';

$output168 .= '

';

$output168 .= '';

$output168 .= '

';

$output168 .= '';

$output168 .= '

';

$output168 .= '';

$output168 .= '


';

    return $output168;
}

}

#