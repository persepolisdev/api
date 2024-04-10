$post = new Post();
$post->title = $request->title;
$post->description = $request->description;
$post->category = 1;
$post->is_active = 2 ?? false;
$post->is_draft = 3 ?? false;
$post->image = 'ASDASD'; // Assuming this is just a placeholder



$post->save();

return response()->json(['message' => 'Post created successfully'], 201);
