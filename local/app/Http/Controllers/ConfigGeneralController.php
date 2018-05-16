<?phpnamespace App\Http\Controllers;use App\Config;use Illuminate\Http\Request;class ConfigGeneralController extends Controller{    public function getConfig()    {        $cauhinhs = Config::whereIn('name', ['config-contact','config-phone','config-email','config-address','config-name'])->orderBy('order')->get();        return view('backend.admin.config.general', compact('cauhinhs'));    }    public function saveConfig(Request $request)    {        $configContact = $request->input('config-contact');        $hdconfigContact = $request->input('hd-config-contact');        $configPhone = $request->input('config-phone');        $hdconfigPhone = $request->input('hd-config-phone');        $configEmail = $request->input('config-email');        $hdconfigEmail = $request->input('hd-config-email');        $configAddress = $request->input('config-address');        $hdconfigAddress = $request->input('hd-config-address');        $configName = $request->input('config-name');        $hdconfigName = $request->input('hd-config-name');        if (strcmp(trim($configContact), trim($hdconfigContact)) != 0) {            $config = Config::where('name', 'config-contact')->first();            $config->content = $configContact;            $config->save();        }        if (strcmp(trim($configPhone), trim($hdconfigPhone)) != 0) {            $config = Config::where('name', 'config-phone')->first();            $config->content = $configPhone;            $config->save();        }        if (strcmp(trim($configEmail), trim($hdconfigEmail)) != 0) {            $config = Config::where('name', 'config-email')->first();            $config->content = $configEmail;            $config->save();        }        if (strcmp(trim($configAddress), trim($hdconfigAddress)) != 0) {            $config = Config::where('name', 'config-address')->first();            $config->content = $configAddress;            $config->save();        }        if (strcmp(trim($configName), trim($hdconfigName)) != 0) {            $config = Config::where('name', 'config-name')->first();            $config->content = $configName;            $config->save();        }        return redirect()->route('config.general.index')            ->with('success', 'Cấu Hình Lưu Thành Công');    }}