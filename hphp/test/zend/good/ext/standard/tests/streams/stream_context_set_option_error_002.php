<?hh <<__EntryPoint>> function main(): void {
var_dump(stream_context_set_option());

$context = stream_context_create();
var_dump(stream_context_set_option($context));
}
